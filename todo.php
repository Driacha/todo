<html>
<head>
<link rel="stylesheet" type="text/css"
href="todo.css">






</head>
<body>
<div class="task-list" id="ausstehend">
 <h3>Ausstehend</h3>
</div>

<div class="task-list" id="inbearbeitung">
 <h3>In Bearbeitung</h3>
</div>

<div class="task-list" id="beendet">
    <h3>Beendet</h3>
</div>

<div class="task-list">
 <h3>Füge eine Aufgabe hinzu</h3>
    <form id="todo-form">
        <input type="text" placeholder="bezeichnung"/>
        <textarea type="text" placeholder="Beschreibung"></textarea>
        <input type="text" placeholder="Frist (tt/mm/jjjj)"/>
        <input type="button" class="btn btn-primary" value="Hinzufügen"/>
    </form>


<input type="button" class="btn btn-primary" value="leeren"/>

<div id="delete-div">Zum Löschen hier hin ziehen</div>
</div>


</body>
</html>