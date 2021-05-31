# Changelog

En cas d'absence de note dans ce chapitre, les mises à jour ne concernent que la doc et des corrections mineures

## 31/05/2021
- Ouverture de la configuration de la tablette dans nouvel onglet du navigateur (ne fonctionnait plus directement dans jeedom)

## 10/11/2020
- Correction indicateur écran allumé

## 03/07/2020
- ajout infos supplémentaires version 1.40

## 12/06/2020
- correction erreur dans log http

## 17/05/2020
- regroupement des commandes par type sur le widget

## 27/04/2020
- correction problème d'affichage de certaines infos
- nettoyage du code

## 27/04/2020
- correction du logicalId si nécessaire en cas de remplacement de tablette par exemple
- ajout fonction setOverlayMessage

## 24/04/2020
- Mise à jour des infos isScreenOn batteryLevel plugged sur les évènements mqtt correspondants
- suppression de l'incône "plugged" dans l'entête surchargée du widget

## 22/04/2020
- suppression démarrage auto du démon si mqtt n'a pas été activé pour les tablettes
- ajout des fonctions fully kiosk 1.38+ : text to speech avec locale & tts engine & queue. Ce qui permet de changer le moteur de voix, la langue et de mettre dans la queue ou non.

- et fonction arrêt du TTS en cours

## 14/01/2020
- ajout de 'mqtt' dans le nom de la commande lié à un évènement MQTT.
- correction bug (merci tuxedo78 dokime7)

## 18/10/2019
- ajout du user + mot de passe (optionnel) dans la configuration du plugin
- ajout d'un bouton pour l'activation de MQTT (arrêt du daemon)

## 11/10/2019
- Intégration des fonctionnalités MQTT pour la détection d'évènement:
screenOn, screenOff, pluggedAC, pluggedUSB, pluggedWireless, unplugged, networkReconnect, networkDisconnect, internetReconnect, internetDisconnect, powerOn, powerOff, showKeyboard, hideKeyboard, onMotion, onDarkness, onMovement, volumeUp, volumeDown, onQrScanCancelled, onBatteryLevelChanged, onScreensaverStart, onScreensaverStop.
- La valeur de l'évenèment prend comme valeur la date + heure de la publication

## 30/09/2019
ajout des dernières fonctions javascript fullykiosk dans la liste des fonctions disponible
- fully.showNotification(String title, String text, String url, boolean highPriority)
- void fully.closeTabByIndex(int index)
- void fully.closeThisTab()
- String fully.getTabList() // returns a JSON array
- void fully.loadUrlInTabByIndex(int index, String url)
- void fully.loadUrlInNewTab(String url, boolean focus)
- int fully.getThisTabIndex()
- void fully.focusThisTab()

Remplacement de la classe Object par jeeObject pour la compatibilité buster

## 29/07/2019
- correction pour commande playSound
- correction de la préférence utilisateur sur l'affichage des actions après mise à jour

## 05/05/2019
- Ajout des fonctions fullykiosk 1.30 et 1.31 dans la liste des fonctions javascript disponible (getfile list, empty folder, bluetooth, qr code..).

## 30/03/2019
- Correction sur les actions/infos visibles par défaut lors de la création de l'équipement
- Ajout délai de rafraîchissement à 0 (pas de refresh)

## 10/01/2019
- Ajout timeout sur refresh des données pour éviter le message "tâche cron n'a pas pu finir"

## 18/11/2018
- correction bug lors de la mise à jour des paramètres "valeur"

## 17/11/2018
- Correction cron 1 minute
- Ajout du port dans le cas où le port 2323 par défaut est déjà utilisé ( un message apparait avec le nouveau port au démarrage de l'appli fullykiosk)
- Ajout info communication Status/Joignable

## 19/10/2018
- ajout clear cookies + shareUrl dans la liste des possibilités javascript fully

## 24/09/2018
- ajout play/stop sound (fully 1.27)
- ajout activation/désactivation fonction javascript (javascriptOn/javascriptOff)
- ajout activation/désactivation mode maintenance (enableLockedMode/disableLockedMode)

## 18/09/2018
- ajout de la fonctionalité capture caméra - enregistre une photo camshot.jpg dans le dossier resources du plugin
- il est possible de préciser le chemin de la sauvegarde et le nom du fichier

## 07/08/2018
- ajout des fonctionnalités fullykiosk 1.26
- ajout injection de code javascript (liste des possibilités affichée non exhaustive)
- correction refresh values (ajout du mot de passe)
- changement largeur input message
- utilisation des titres sur 1 ligne en remplacement des message sur 2 lignes si uniquement 1 paramètre nécessaire
- gestion des onglets
- possibilité d'envoyer des messages dans différentes langues
- correction bug pour la fonction envoi de "settings" fullykiosk

## 27/06/2018
- possibilité de choisir le délai de rafraîchissement des données
- correction bug affichage batterie

## 25/06/2018
- possibilité d'ajouter de nouvelles commandes
- widget légèrement revu (affichage de la batterie en entête)

## 22/06/2018
- description des commandes en français
- autocomplete des paramètres possible
- cacher les titres si inutile
- attention la recréation de l'équipement pourrait être nécessaire


## 20/06/2018
- création
