This simple project allows the user to generate a random map.

All one has to do is:

- choose the size of the map he wants
- the type of terrain he needs
- valide his choices

This project, built mostly in PHP, was a way for me to use the $_POST method and loops.
Once the generation is launched, a double foreach loop makes a map which is x * x squares.
The terrains chosen are then placed in one array which is spliced into several tables, equal to the map size.
Finally, a random function places a class name in the html corresponding to a table cell and, depending on the css
linked, displays a tile or another.