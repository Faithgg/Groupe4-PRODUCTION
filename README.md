------------------------------------------------------ Production GROUPE 4 ------------------------------------------------------------------

**Membres du groupe**

    - Manuel Govinda AGBAHE
    - Mattis ALMEIDA LIMA
    - Blessing-Grace EKLOU-DOVI
    - Faithgot Letonsou GLIN DAYI
    - Hanane ISSIAKENE
    - Abraham LAWSON


---------------------------------------------------------------------------------------------------------------------------------------------

- Lien `Figma` de la Présentation de la soutenance : https://www.figma.com/file/M9gbIb8deU8NdDzrD2kF0C/Restitution-technique?type=design&node-id=9%3A2&mode=design&t=Mnb8coniAz4JBkGp-1

    - En premier, n'oubliez pas de connecter la db dans le fichier `bdd_connect.php` après avoir chargé le fichier `groupe4.sql` de la db.

- Toutes les attentes du projet ont été comblés et en plus des fonctionnalités demandées :
    
    - Un super utilisateur  qui a tous les roles avec lequel, vous pouvez créer d'autres comptes et leur attribuer le role voulu , Ses identifiants sont :
        - Email : `sudo@sudo.fr`
        - M D P : `super_user`
    - Dans la gestion des roles:
        - Un admin ne peut pas modifier le role d'un admin ou émettre des actions sur un compte admin
        - Seul le sudo ou les sudos si vous en avez créé par commande SQL (c'est la seule manière d'en définir) peut travailler sur tous les comptes admins jusqu'au bas niveau, il a le droit de définir quelqu'un comme admin également

        - Coté ENTRETIEN, nous avons plutot pensé à deux roles :
            - Le role LOGISTIC qu'ont ceux qui peuvent créer les équipes, planifier des taches et gérer des actions de maintenances.

            - Le role MAINTENANCE qu'ont ceux qui obéissent, tout le monde ne peut avoir cette interface pour créer et gérer des équipes comme ils veulent en entretien. À l'avenir, un dashboard maintenance pour ceux qui ont ce compte est envisageable pour voir les entretiens planifiés pour une équipe ainsi que modifier le statut de ces entretiens. Mais pour le moment, juste un mail peut etre envoyé par les lecteurs pour informer celui mis sur la tache afin qu'il s'en occupe. Leur dashboard n'est pas différent de celui d'un client simple.

    - Un système d'ALERT avec une interface attrayante est conçue pour valider ou refuser une action de réservation, c'est dans le but de ne pas retourner l'erreur sur la page du logement ou de la réservtion vu qu'il faut demander à réserver ou à modifier la réservation  avant d'obtenir le formulaire. Cette interface est affichée pendant 5 ou 6s au plus puis redirige vers la page idéale.

    - Un mail d'inscription et de confirmation de réservation à l'inscription et à la réservation d'un logement sur notre site

- Dans notre développement, on a voulu changer un peu de gout avec un fichier JSON envisagé pour gérer nos requetes SQLs, il permet au lecteur du code de voir l'action qu'on émet au lieu de voir une longue requete SQL. Ça facilite la lecture du code et la modification facile d'une requete quand un truc ne marche pas lorsqu'on était en mode maintenance du projet. Une fonction est aussitot implémentée dans le fichier recuperer_Requete.php pour récuperer ces requetes plus facilement.

- On a essayé de gérer le RESPONSIVE au mieux qu'on peut.
---------------------------------------------------------------------------------------------------------------------------------------------

<img width="1429" alt="Capture d’écran 2023-07-14 à 08 38 16" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/87e63857-f409-4b1a-bbc4-9bebe11e8027">

<img width="1429" alt="Capture d’écran 2023-07-14 à 08 38 44" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/9b72555e-13ea-42ae-ae6e-6f92d9126110">

<img width="1429" alt="Capture d’écran 2023-07-14 à 08 39 13" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/854cc714-6389-4177-adcb-3707a6dde10a">

<img width="1429" alt="Capture d’écran 2023-07-14 à 08 40 23" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/99bfa654-090f-4fd1-9bd0-eaa0d6211dec">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 41 26" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/757827ae-c1d6-4d6e-884b-890e79f02b3d">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 42 00" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/7420e5e8-4233-43ce-a489-514ccf90ba30">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 42 49" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/8887bdcb-97b5-4bcf-a811-d7bfd1e2daa7">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 45 48" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/004b1dd5-a6f5-4ca3-afc0-f744cf6c5ad6">

<img width="1431" alt="Capture d’écran 2023-07-14 à 08 47 23" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/9a366b98-526c-4580-8b2d-473354fe3a7e">

<img width="1431" alt="Capture d’écran 2023-07-14 à 08 49 07" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/cf36f447-9ee3-44a1-83e3-564659fbc7f6">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 50 21" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/015e5085-8a42-4a86-9749-63b20ab4cff2">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 52 04" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/18b081f1-1a9e-4493-8146-24fbf2b6bba4">

<img width="1440" alt="Capture d’écran 2023-07-14 à 08 52 52" src="https://github.com/Faithgg/Groupe4-PRODUCTION/assets/121299370/b93826ca-0e6c-4b05-9008-81706affc320">
