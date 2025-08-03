// ajout de champs texte pour les task
const addTaskBtn = document.getElementById("addTaskBtn");
const tasksContainer = document.getElementById("tasksContainer");
//btn pour ajouter un input task
addTaskBtn.addEventListener("click", function () {
    const taskDiv = document.createElement("div");
    taskDiv.classList.add("task-item");
//config de l'input task
    const textInput = document.createElement("input");
    textInput.type = "text";
    textInput.name = `tasks[][text]`;
    textInput.placeholder = "Ajouter une tâche...";
    textInput.required = true;
    textInput.classList.add("task-text");
// config de l'importance d'une task
    const select = document.createElement("select");
    select.name = `tasks[][importance]`;

    ["haute", "moyenne", "basse"].forEach(level => {
        const option = document.createElement("option");
        option.value = level;
        option.textContent = level;
        select.appendChild(option);
    });

    taskDiv.appendChild(textInput);
    taskDiv.appendChild(select);
    tasksContainer.appendChild(taskDiv);
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
