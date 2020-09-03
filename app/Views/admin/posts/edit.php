<!-- Affichage du formulaire -->
<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('lieuachat', 'Lieu d\'achat', ['type' => 'text']); ?>
    <?= $form->input('urlachat', 'URL d\'achat', ['type' => 'text']); ?>
    <?= $form->input('ref', 'Référence', ['type' => 'text']); ?>
    <?= $form->input('dateachat', 'Date d\'achat', ['type' => 'text']); ?>
    <?= $form->input('datefingarantie', 'Date de fin de garantie', ['type' => 'text']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <?= $form->select('prix', 'Prix', ['type' => 'text']); ?>
    <?= $form->input('conseilsentretien', 'Conseils d\'entretien', ['type' => 'textarea']); ?>
    <?= $form->select('phototicketachat', 'Photo du ticket d\'achat', ['type' => 'text']); ?>
    <?= $form->input('manuelutilisation', 'Manuel d\'utilisation', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
