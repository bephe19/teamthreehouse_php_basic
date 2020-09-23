var database={
    "menu":{
        "dropdown":{
           "value":{
               "Tas Carir":["#populer"],
               "Tenda Camping":["#baru"],
               "Sepatu Gunung":["#recomanded"]
           }
        },

        "link":{
            "value":{
               "home":["#beranda"],
                   "Produk Terpopuler":["#populer"],
                   "Produk Terbaru":["#baru"],
                   "Rekomendasi":["#recomanded"]
            }
         },        
    }
};

// =============== Dropdown Menu

var menu_dropdown_temp="";

var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

for(x=0;x<menu_dropdown_key.length;x++){

    menu_dropdown_temp+=`<a class="dropdown-item link-smooth" href="`+database.menu.dropdown.value[menu_dropdown_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}

$('#menu_dropdown').html(menu_dropdown_temp)

// =============== Link Menu

var menu_link_temp="";

var menu_link_key=Object.keys(database.menu.link.value);

for(x=0;x<menu_link_key.length;x++){

    menu_link_temp+=`<li class="nav-item">
    <a class="nav-link link-smooth" href="`+database.menu.link.value[menu_link_key[x]]+`">`+menu_link_key[x]+`</a>
    </li>`;
}

$('#menu_link').append(menu_link_temp);