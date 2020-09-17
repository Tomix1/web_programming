@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../wizaplace/php-fpm-status-cli/php-fpm-status
php "%BIN_TARGET%" %*
