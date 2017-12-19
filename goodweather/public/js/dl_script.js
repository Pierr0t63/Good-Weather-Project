var liste = [
    "Draggable",
    "Droppable",
    "Resizable",
    "Selectable",
    "Sortable"
];

// $('#searching').autocomplete({
//     source : liste
// });

$('#searching').autocomplete({
    source : liste, // on inscrit la liste de suggestions
    minLength : 3 // on indique qu'il faut taper au moins 3 caractères pour afficher l'autocomplétion
});

// $('#citysearch').autocomplete({
//     source : ['Clermont-Ferrand', 'Vichy', 'Paris'],
//     minLength : 3
//     // position : {
//     //     my : 'bottom',
//     //     at : 'top'
//     // } // ici, ma liste se placera au-dessus et à l'extérieur de mon champ de texte.
// });