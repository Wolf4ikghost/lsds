document.addEventListener('DOMContentLoaded', () => {
    // Поля рендерятся только с атрибутом name (без id) — ищем по name
    const inputTask = document.querySelector('input[name="txtx"]');
    const inputDate = document.querySelector('input[name="vr"]');
    const addBtn    = document.getElementById('bts_add');
    const delBtn    = document.getElementById('bts_del');
    const tableBody = document.getElementById('tablebody');


    const STORAGE_KEY = 'tasks';

    const loadTasks = () => JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
    const saveTasks = (tasks) => localStorage.setItem(STORAGE_KEY, JSON.stringify(tasks));

    function renderRow(task, date) {
        const row = document.createElement('tr');
        row.innerHTML = `<td>${task}</td><td>${date}</td>`;
        tableBody.appendChild(row);
    }

    function renderAll() {
        tableBody.innerHTML  = '';
        loadTasks().forEach(({ task, date }) => renderRow(task, date));
    }

    function add(task, date) {
        const tasks = loadTasks();
        tasks.push({ task, date });   // добавляем в список, а не перезатираем
        saveTasks(tasks);
        renderRow(task, date);
    }

    /*
        Ниже добавление взял из нейронки

    */

   addBtn.addEventListener('click', async (e) => {
    e.preventDefault(); // не даём браузеру перезагрузить страницу — сами отправим запрос

    const taskValue = inputTask ? inputTask.value.trim() : '';
    const dateValue = inputDate ? inputDate.value.trim() : '';
    const formData = new FormData();
    formData.append('txtx', taskValue);
    formData.append('vr', dateValue);
    formData.append('action', 'add');

    try {
        const response = await fetch(window.location.href, {
            method: 'POST',
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
            body: formData
        });
        const data = await response.json();
        if (data.success) {
            add(data.task.txtx, data.task.vr);
            alert("Все успешно добавлено");
            inputTask.value = '';
            inputDate.value = '';
        } else {
            console.log('Ошибки валидации:', data.errors);
            // здесь можно вывести ошибки под полями формы
        }
    } catch (err) {
        console.error('Ошибка запроса', err);
    }
});




    delBtn.addEventListener('click', () => {
        localStorage.removeItem(STORAGE_KEY);
        tableBody.innerHTML = '';
    });

    renderAll();
});