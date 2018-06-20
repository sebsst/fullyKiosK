# Plugin fully Kiosk

## Présentation

Ce plugin permet d'accéder aux fonctions des tablettes utilisant l'application fully kiosk.

### Configuration du plugin

Renseigner l'adresse IP et le mot de passe

### Fonctions disponible

Voici la liste des fonctions disponible. 

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

Plus de détails sur le site de fully kiosk: https://www.ozerov.de/fully-kiosk-browser/

Pour les fonctions screenshot et camshot les fichiers résultats ne sont pas stockés, mais si vous avez un besoin de ce côté là vous pouvez toujours vous servir du plugin camera et mettre l'url de snapshot:
http://[iptablette]:2323/?cmd=getCamshot&password=[pass] 


## Changelog

[Voir la page dédiée](changelog.md)
