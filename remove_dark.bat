@echo off
powershell -Command "Get-ChildItem -Path resources/views -Filter '*.blade.php' -Recurse | ForEach-Object { $content = Get-Content $_.FullName -Raw; $content -replace 'dark:', '' | Set-Content $_.FullName }"
