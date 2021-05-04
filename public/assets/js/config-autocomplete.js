var src = {
    "Bootstrap 4 Autocomplete example": 1,
    "Best example in the world": 2,
    "Bootstrap 4 Autocomplete is very nice": 3,
    "It contains neatly arranged example items": 4,
    "With many autocomplete values": 5,
    "And it uses default Bootstrap 4 components": 6,
    "You can use this example to test": 7,
};

function onSelectItem(item, element) {
    document.getElementById("id_leader").value = item.value;
}

function resetItem() {
    document.getElementById('myAutocomplete').value = '';
    document.getElementById('id_leader').value = '';
}

$(document).ready(function() {
    $('#myAutocomplete').autocomplete({
        source: src,
        onSelectItem: onSelectItem,
        // highlightClass: 'text-danger',
        treshold: 2,
    });
});