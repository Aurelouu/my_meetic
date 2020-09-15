# my_meetic

Création d'un site de rencontre.
Réaliser Seule.

Le but du projet est de créer un site de rencontres à la manière d’unMeetic. Nous vous proposons del’orienter vers la rencontre de personne dans un bahut qui partageraient des points communs par exemple.Il est obligatoire de programmer en PHP orienté objet.Il est fortement conseillé lors d’un envoi de données d’effectuer une requête ajax en JQuery afin de vérifieret envoyer les données, puis traiter la réponse.Il est obligatoire de gérer tous les cas d’erreurs possibles (injections SQL, doublons en DB, etc. . . ).

Interdiction d'utiliser des plugins JQuery + Il est interdit d’utiliser les scriptsJavaScriptdu frameworkBootstrap:bootstrap.jsetbootstrap.min.jsne doivent donc pas être intégrés dans votre projet.

Partie obligatoire_ _ _ _ _ __ _ _ _ _Les visiteurs ont uniquement accès à un formulaire d’inscription et de connexion.Vous apporterez un soin particulier à la conception de votre base de données, sa structure sera évaluée ensoutenance

Inscription / Connexion_ _ _ _ _ __ _ _ _ _Les informations minimales requises sont:•nom•prénom•date de naissance (vérification de l’âge, inscription réservé +18)•genre (homme, femme, autre. . . )•ville•e-mail (unique, utilisé pour la connexion)•mot de passe (hashé, utilisé pour la connexion)•loisir (au moins un)

Mon compte_ _ _ _ _ __ _ _ _ _La page mon compte contiendra:•Un récapitulatif des informations du compte:•nom•prénom•date de naissance (vérification de l’âge, inscription réservé +18)•genre (homme, femme, autre. . . )•e-mail•mot de passe•loisir(s)•Un gestionnaire de compte (modification du mot de passe, e-mail, . . . ).•Une fonctionnalité permettant de supprimer définitivement le compte.


Recherche_ _ _ _ _ __ _ _ _ _Nous allons maintenant nous focaliser sur l’aspectrencontresdu site. Il est attendu une page de recherchedans laquelle on peut spécifier des filtres par:•Genre(Homme/Femme/Autre)•Localisation(ville)•Loisir(Proposer plusieurs tags possibles(Dance, Skateboard, Manga, Licorne, Cuisiner / Autre à pré-ciser dans ce cas)•Tranche d’âge(18/25, 25/35, 35/45, 45+)Il doit être possible de spécifier plusieurs villes (Paris, Lyon, Marseille) et de combiner tous les filtres. Parexemple: rechercher un homme entre 25 et 35 ans, habitant à Paris ou Lyon qui aime lire des mangas etcuisiner.Le résultat de la recherche se présentera sous la forme d’un carrousel. Chaque élément de celui-ci devracontenir les informations d’une personne.Ce carrousel sera développé en JQuery.
