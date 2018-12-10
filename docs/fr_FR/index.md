# Plugin fully Kiosk

## Présentation

Ce plugin permet d'accéder aux fonctions des tablettes utilisant l'application fully kiosk.

### Configuration du plugin

Renseigner l'adresse IP et le mot de passe
- Vous pouvez cocher ou décocher l'affichage sur le widget de certaines fonctionnalités en fonction de votre besoin
- vous pouvez ajouer vos propres actions par exemple en ajoutant une commande action "Lancer URL jeedom.com" avec la valeur correspondante loadURL&url=www.jeedom.com

### Fonctions disponibles

Voici la liste des fonctions disponibles. 

Fonctions basiques
- /?cmd=deviceInfo&password=[pass]
- /?cmd=loadStartURL&password=[pass]
- /?cmd=loadURL&url=[url]&password=[pass]
- /?cmd=clearCache&password=[pass] 
- /?cmd=restartApp&password=[pass] 
- /?cmd=exitApp&password=[pass] 
- /?cmd=screenOn&password=[pass]
- /?cmd=screenOff&password=[pass]
- /?cmd=forceSleep&password=[pass] 

Screensaver and daydream
- /?cmd=startScreensaver&password=[pass] (ver. 1.21+)
- /?cmd=stopScreensaver&password=[pass] (ver. 1.21+)
- /?cmd=startDaydream&password=[pass] (ver. 1.24.1+)
- /?cmd=stopDaydream&password=[pass] (ver. 1.24.1+)


Other apps and bring Fully app to foreground
- /?cmd=startApplication&package=[pkg]&password=[pass] (ver. 1.21+)
- /?cmd=toForeground&password=[pass]

Return to webview if any other view (PDF, Video, Settings) is open
- /?cmd=popFragment&password=[pass] 

Get screenshot image (PNG)
- /?cmd=getScreenshot&password=[pass]

Get camshot image (requires Motion Detection)
- /?cmd=getCamshot&password=[pass] 

Simulate motion
- /?cmd=triggerMotion&password=[pass] 

Text to speech
- /?cmd=textToSpeech&text=[text]&password=[pass] 

Change fully kiosk parameters
/?cmd=setBooleanSetting&key=[key]&value=[true|false]&password=[pass] 
/?cmd=setStringSetting&key=[key]&value=[value]&password=[pass] 

Liste des paramètres:
-  "setRemoveSystemUI": false,
-  "wifiKey": "",
-  "movementBeaconList": "",
-  "showMenuHint": true,
-  "authUsername": "",
-  "screenOffInDarkness": false,
-  "useWideViewport": true,
-  "geoLocationAccess": false,
-  "motionSensitivity": "90",
-  "remoteAdminPassword": "",
-  "launchOnBoot": true,
-  "graphicsAccelerationMode": "2",
-  "showBackButton": true,
-  "authPassword": "",
-  "addressBarBgColor": -4473925,
-  "enablePullToRefresh": true,
-  "motionSensitivityAcoustic": "90",
-  "ignoreMotionWhenMoving": false,
-  "kioskHomeStartURL": false,
-  "kioskWifiPin": "",
-  "disableCamera": false,
-  "wifiSSID": "",
-  "keepSleepingIfUnplugged": false,
-  "darknessLevel": "10",
-  "microphoneAccess": false,
-  "actionBarInSettings": false,
-  "remoteAdminLan": true,
-  "cacheMode": "-1",
-  "movementBeaconDistance": "5",
-  "screensaverBrightness": "",
-  "desktopMode": false,
-  "thirdPartyCookies": true,
-  "alarmSoundFileUrl": "",
-  "knoxDisableStatusBar": false,
-  "disablePowerButton": true,
-  "reloadOnInternet": true,
-  "screensaverFullscreen": false,
-  "actionBarTitle": "Fully Kiosk Browser",
-  "pageTransitions": false,
-  "urlBlacklist": "",
-  "playAlarmSoundUntilPin": false,
-  "showAppLauncherOnStart": false,
-  "appLauncherScaling": "100",
-  "timeToScreensaverV2": "0",
-  "usageStatistics": false,
-  "movementDetection": true,
-  "restartOnCrash": true,
-  "sleepOnPowerConnect": false,
-  "readNfcTag": false,
-  "swipeNavigation": false,
-  "screenOnOnMovement": true,
-  "acra.legacyAlreadyConvertedToJson": true,
-  "sleepOnPowerDisconnect": false,
-  "remotePdfFileMode": "0",
-  "knoxDisableUsbHostStorage": false,
-  "deleteHistoryOnReload": false,
-  "autoplayVideos": true,
-  "mdmApkToInstall": "",
-  "loadOverview": true,
-  "startURL": "",
-  "actionBarBgColor": -15906911,
-  "enableZoom": true,
-  "reloadOnWifiOn": true,
-  "compassSensitivity": "50",
-  "advancedKioskProtection": false,
-  "searchProviderUrl": "https://www.google.com/search?q\u003d",
-  "defaultWebviewBackgroundColor": -1,
-  "motionDetectionAcoustic": false,
-  "reloadOnScreenOn": false,
-  "reloadPageFailure": "0",
-  "actionBarIconUrl": "",
-  "initialScale": "0",
-  "enableBackButton": true,
-  "mdmDisableUsbStorage": false,
-  "actionBarBgUrl": "",
-  "setWifiWakelock": false,
-  "lockSafeMode": false,
-  "acra.lastVersionNr": 317,
-  "deleteWebstorageOnReload": false,
-  "knoxDisableMtp": false,
-  "actionBarFgColor": -1,
-  "audioRecordUploads": false,
-  "showHomeButton": true,
-  "fadeInOutDuration": "200",
-  "autoplayAudio": false,
-  "reloadEachSeconds": "1200",
-  "accelerometerSensitivity": "80",
-  "showPrintButton": false,
-  "knoxDisableScreenCapture": false,
-  "kioskExitGesture": "0",
-  "kioskAppWhitelist": "",
-  "enableVersionInfo": true,
-  "screensaverWallpaperURL": "fully://color#000000",
-  "forceScreenUnlock": true,
-  "waitInternetOnReload": true,
-  "disableVolumeButtons": false,
-  "forceScreenOrientation": "0",
-  "showStatusBar": false,
-  "disableStatusBar": false,
-  "kioskPin": "",
-  "detectIBeacons": false,
-  "screensaverDaydream": false,
-  "appLauncherBackgroundColor": -1,
-  "videoCaptureUploads": false,
-  "stopScreensaverOnMovement": true,
-  "webcamAccess": true,
-  "motionCameraId": "",
-  "knoxDisableSafeMode": false,
-  "urlWhitelist": "",
-  "disableOtherApps": true,
-  "playAlarmSoundOnMovement": false,
-  "forceImmersive": false,
-  "enableTapSound": false,
-  "showActionBar": false,
-  "volumeLicenseKey": "",
-  "ignoreJustOnceLauncher": false,
-  "remoteAdmin": true,
-  "launcherInjectCode": "",
-  "keepScreenOn": false,
-  "cameraCaptureUploads": false,
-  "showCamPreview": false,
-  "pauseMotionInBackground": false,
-  "sleepSchedule": "",
-  "timeToScreenOffV2": "35",
-  "setCpuWakelock": false,
-  "softKeyboard": true,
-  "enablePopups": false,
-  "mdmDisableStatusBar": false,
-  "statusBarColor": 0,
-  "lastVersionInfo": "1.24.2",
-  "textSelection": true,
-  "fileUploads": false,
-  "jsAlerts": true,
-  "disableHomeButton": true,
-  "screensaverPlaylist": "",
-  "webviewDebugging": false,
-  "launcherApps": "",
-  "showNavigationBar": false,
-  "showAddressBar": false,
-  "batteryWarning": "0",
-  "localPdfFileMode": "0",
-  "mdmDisableScreenCapture": false,
-  "autoImportSettings": true,
-  "motionDetection": true,
-  "kioskMode": false,
-  "singleAppMode": false,
-  "enableUrlOtherApps": false,
-  "cloudService": false,
-  "navigationBarColor": 0,
-  "isRunning": true,
-  "motionFps": "5",
-  "websiteIntegration": false,
-  "reloadOnScreensaverStop": false,
-  "deleteCookiesOnReload": false,
-  "errorURL": "",
-  "screenBrightness": "",
-  "knoxDisableCamera": false,
-  "knoxEnabled": false,
-  "showProgressBar": true,
-  "formAutoComplete": true,
-  "playMedia": true,
-  "showRefreshButton": true,
-  "stopScreensaverOnMotion": true,
-  "redirectBlocked": false,
-  "showForwardButton": true,
-  "mdmDisableADB": false,
-  "restartAfterUpdate": false,
-  "enableFullscreenVideos": false,
-  "remoteFileMode": "1",
-  "fontSize": "100",
-  "clearCacheEach": false,
-  "confirmExit": true,
-  "ignoreSSLerrors": false,
-  "singleAppIntent": "",
-  "userAgent": "0",
-  "runInForeground": false,
-  "deleteCacheOnReload": true,
-  "screenOnOnMotion": true

Plus de détails sur le site de fully kiosk: https://www.ozerov.de/fully-kiosk-browser/

Pour les fonctions screenshot et camshot les fichiers résultats ne sont pas stockés, mais si vous avez un besoin de ce côté là vous pouvez toujours vous servir du plugin camera et mettre l'url de snapshot:
http://[iptablette]:2323/?cmd=getCamshot&password=[pass] 

- getCamshot a été ajouté: par défaut l'image est stocké dans le dossier resources du plugin avec le nom camshot.jpg. Vous pouvez préciser un autre chemin et un autre nom de fichier si besoin. Bien entendu le chemin doit être accessible en écriture.


## Autres fonctionnalités
- Fully Kiosk permet d'injecter des fonctions JS comme par exemple lancer une application avec des paramètres.
Dans les settings vous devez activer la fonction : Advanced Web Settings >> Enable JavaScript Interface
Dans ce cas là vous pouvez créer un design contenant une zone HTML avec le script souhaité. 

-Exemple qui permet de lancer VLC avec un flux d'une caméra:

<script>fully.startApplication('org.videolan.vlc',"android.intent.action.VIEW", 'rtsp://userid:password@192.168.0.xx:88/videoSub'); </script>

Ensuite il suffit de charger le design sur la tablette en utilisant l'URL du design.
Attention le script pourrait poser des problèmes sur un device où fully kiosk n'est pas installé.
Vous pouvez vous référer au site officiel pour mettre en place ce type de fonctionnalités.


## Changelog

[Voir la page dédiée](changelog.md)
