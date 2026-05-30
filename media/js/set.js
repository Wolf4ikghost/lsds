		const input=document.getElementById('txtx');
		const add_bts=document.getElementById('bts_add');
		const dates=document.getElementById('vremya');
		const del_bts=document.getElementById('bts_del');
		const tableBody=document.getElementById('tablebody');
		function isString(value) 
		{
    		return typeof value === 'string';
		}
		add_bts.addEventListener('click',(e)=>
		{
    		e.preventDefault();
    		const inputs_val = input.value.trim();
    		const date = dates.value; 
    		if (isString(inputs_val) !== "" && date !== "")
    		{
        		alert("Отлично,поля не пустые");
    		}
    		else
    		{
        		alert("Пустые поля или неверный формат");
        		return;
    		}
			add(inputs_val,date);//Обьявление аргументов до создания функции до их заполнение 
		});
		del_bts.addEventListener('click',()=>
		{//Функция на удаления эл-ов
			delet(inputs_val,date);
		});

		function add(pole,date)
		{//Функция на добавления значений в таблицу
			const save_danne_inp_text = window.localStorage.setItem('pole',`${pole}`);//Сохранение данных через localStorage
			const save_danne_inp_date = window.localStorage.setItem('date',`${date}`);//Сохранение данных через localStorage
			const row=document.createElement('tr');//Сохранение значений функций в поля таблицы
			row.innerHTML =  ` 
                <td>${pole}</td>
                <td>${date}</td>
            `;
            tablebody.appendChild(row);//Добавление дочернего метода
		}
		function delet(inpets_pole,inpts_date)
		{
			row.innerHTML =  ` 
                <td>${""}</td>
                <td>${""}</td>
            `;
			  tablebody.appendChild(row);
			  localStorage.clear();
		}