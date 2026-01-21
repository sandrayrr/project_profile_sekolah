<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class UserController extends Controller
{
   public function index(Request $request)
{
    $q = $request->query('q');

    $users = User::when($q, function ($query) use ($q) {
            $query->where(function ($sub) use ($q) {
                $sub->where('name', 'like', "%{$q}%")
                    ->orWhere('email', 'like', "%{$q}%");
            });
        })
        ->orderBy('id', 'desc')
        ->paginate(10)
        ->withQueryString();

    $users->getCollection()->transform(function ($user) {

        if (!$user->last_activity) {
            $user->status = 'offline';
            $user->last_seen = 'Tidak pernah online';
            return $user;
        }

        $diffSeconds = Carbon::parse($user->last_activity)->diffInSeconds(now());

        if ($diffSeconds <= 120) {
            $user->status = 'online';
            $user->last_seen = 'Online sekarang';
        } elseif ($diffSeconds <= 900) {
            $user->status = 'idle';
            $user->last_seen = 'Tidak aktif';
        } else {
            $user->status = 'offline';
            $user->last_seen = Carbon::parse($user->last_activity)->diffForHumans();
        }

        return $user;
    });

    return view('admin.crud.users.layout', compact('users', 'q'));
}

    public function create()
    {
        return view('admin.crud.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role'     => ['required', Rule::in(['user','admin'])],
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil dibuat.');
    }

    // public function show(User $user)
    // {
    //     return view('admin.crud.users.show', compact('user'));
    // }

    public function edit(User $user)
    {
        return view('admin.crud.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => ['required','email', Rule::unique('users')->ignore($user->id)],
            'password' => 'nullable|string|min:6|confirmed',
            'role'     => ['required', Rule::in(['user','admin'])],
        ]);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil diupdate.');
    }

    public function destroy(User $user)
    {
        // prevent self-delete
        if (Auth::id() === $user->id) {
            return back()->with('error', 'Kamu tidak bisa menghapus akun sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
