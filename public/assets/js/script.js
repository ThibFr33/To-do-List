const addTaskBtn = document.getElementById("addTaskBtn");
const tasksContainer = document.getElementById("tasksContainer");

addTaskBtn.addEventListener("click", function () {
    const taskDiv = document.createElement("div");
    taskDiv.classList.add("task-item");

    // Index pour le nommage unique
    const taskIndex = tasksContainer.querySelectorAll(".task-item").length;

    // Input texte de la tâche
    const textInput = document.createElement("input");
    textInput.type = "text";
    textInput.name = `tasks[${taskIndex}][text]`;
    textInput.placeholder = "Ajouter une tâche...";
    textInput.required = true;
    textInput.classList.add("task-text");

    // Select d'importance
    const select = document.createElement("select");
    select.name = `tasks[${taskIndex}][importance]`;

    ["haute", "moyenne", "basse"].forEach(level => {
        const option = document.createElement("option");
        option.value = level;
        option.textContent = "Priorité " + level;
        select.appendChild(option);
    });

    // Ajout des éléments dans l'ordre : texte, select
    taskDiv.appendChild(textInput);
    taskDiv.appendChild(select);
    tasksContainer.appendChild(taskDiv);
});

// interaction avec les tasks des listes déjà affichées (reste inchangé)
document.querySelectorAll('.task-checkbox').forEach(function (checkbox) {
    const taskText = checkbox.closest("li").querySelector(".task-text");
    checkbox.addEventListener("change", function () {
        if (taskText) {
            taskText.classList.toggle("checked", this.checked);
        }
    });
    if (checkbox.checked && taskText) {
        taskText.classList.add("checked");
    }
});



// interaction avec les tasks des listes déjà affichées
document.querySelectorAll('.task-checkbox').forEach(function (checkbox) {
    const taskText = checkbox.closest("li").querySelector(".task-text");

// on place un écouteur sur la checkbox et on ajoute un toggle
    checkbox.addEventListener("change", function () {
        if (taskText) {
            taskText.classList.toggle("checked", this.checked);
        }
    });

// condition: si déjà cochée au chargement, on applique le style
    if (checkbox.checked && taskText) {
        taskText.classList.add("checked");
    }
});
