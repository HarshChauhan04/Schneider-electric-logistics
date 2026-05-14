$url = "https://windows.php.net/downloads/pecl/releases/mongodb/1.21.5/php_mongodb-1.21.5-8.2-ts-vs16-x64.zip"
$zipFile = "$env:TEMP\php_mongodb.zip"
$extPath = "C:\xampp\php\ext\php_mongodb.dll"
$iniPath = "C:\xampp\php\php.ini"

Write-Host "Downloading MongoDB Extension (1.21.5)..."
Invoke-WebRequest -Uri $url -OutFile $zipFile

Write-Host "Extracting..."
Expand-Archive -Path $zipFile -DestinationPath "$env:TEMP\php_mongodb" -Force

Write-Host "Installing to $extPath..."
Copy-Item "$env:TEMP\php_mongodb\php_mongodb.dll" -Destination $extPath -Force

$iniContent = Get-Content $iniPath -Raw
if ($iniContent -notmatch "extension=mongodb") {
    Write-Host "Updating php.ini..."
    Add-Content -Path $iniPath -Value "`r`nextension=mongodb"
}

Remove-Item $zipFile
Remove-Item "$env:TEMP\php_mongodb" -Recurse -Force

Write-Host "MongoDB extension 1.21.5 successfully installed!"
Write-Host "Please restart Apache in your XAMPP Control Panel to apply changes."
