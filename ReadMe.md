<b>LIHTC</b> 

This website is to help develop new Low Income Housing Projects (LIHTC).

Technologies: JQuery, JS, Google maps + locations API, BoxLayout (codrops) Functionality, FontAwesome font-family

The main layout is stored in one file (index.php). 

<b>The Layout of index.php</b>
<ul><li>bl-main: The <i>main</i> portion of the page, all transitions lap over the bl-main.</li>
<li>bl-box: The two user option buttons displayed on the first page</li>
<li>bl-content: <i>Content</i> is individual content of the transition page(s)</li>
<li>fa: The <i>Images</i> used are fontAwesome</li>
<li>bl-panel-items, panel-#: Panels are made for individual content per <i>address</i> inputted (ex. input-2 == two address inputted).
    *panel-5 is for finding a home.</li></ul>


<b>Functionality</b>
<ul><li>BoxLayout.js: Used for scaling, hiding the transitions of each <i>page</i>.</li>
<li>House.js: Holds the data of each address inputted: address, lihtc score, amenities<strike>, picture</strike>.</li>
<li>Maps.js: The init and display information for the map and pins.</li>
<li>Score.js: Calculates the score, and processes the nearby information regarding the address.</li>
