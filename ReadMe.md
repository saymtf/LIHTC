<b>LIHTC</b> 

This website is to help develop new Low Income Housing Projects (LIHTC).

Technologies: JQuery, JS, Google maps + locations API, BoxLayout (codrops) Functionality, FontAwesome font-family

The website is stored in one file (index.hmtl). 

<b>The Layout</b>
bl-main: The <i>main</i> portion of the page, all transitions lap over the bl-main.
bl-content: <i>Content</i> is individual content of the transition page(s)
fa: The <i>Images</i> used are fontAwesome
bl-panel-items, panel-#: Panels are made for individual content per <i>address</i> inputted (ex. input-2 == two address inputted).
    *panel-5 is for finding a home.


<b>Functionality</b>
BoxLayout: Used for scaling the transitions of each <i>page</i>.
House: Holds the data of each address inputted: address, lihtc score, amenities<strike>, picture</strike>.
Maps: The init and display information for the map and pins.
Score: Calculates the score, and processes the nearby information regarding the address.
