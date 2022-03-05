// Бургер
const burger = document.getElementById('burger');
const nav = document.getElementById('nav');
const body = document.querySelector('body');

burger.addEventListener('click', () => {
    body.classList.toggle('scroll-hidden');
    nav.classList.toggle('nav--active');
    burger.classList.toggle('nav__burger--active');
});

const errorBlock = document.getElementById('errorBlock');

// Регистрация
const regForm = document.getElementById('reg-form');
const regUserBtn = document.getElementById('reg_user');

if(regForm) {
    regForm.addEventListener('submit', (e) => {
        e.preventDefault();
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'ajax/reg.php');
    
        const formData = new FormData(regForm);
    
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4 && xhr.status === 200) {
                const responseText = xhr.responseText;
                if(responseText === 'Готово') {
                    regUserBtn.textContent = 'Всё готово';
                    errorBlock.classList.remove('form__message--active');
                    alert('Форма отправлена успешно!');
                    regForm.reset();
                } else {
                    errorBlock.classList.add('form__message--active');
                    errorBlock.textContent = responseText;
                }
            }
        };
    
        xhr.send(formData);
    });
}

// Авторизация
const authForm = document.getElementById('auth-form');
const authUserBtn = document.getElementById('auth_user');

if(authForm) {
    authForm.addEventListener('submit', (e) => {
        e.preventDefault();
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'ajax/auth.php');
    
        const formData = new FormData(authForm);
    
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4 && xhr.status === 200) {
                const responseText = xhr.responseText;
                if(responseText === 'Готово') {
                    authUserBtn.textContent = 'Готово';
                    errorBlock.classList.remove('form__message--active');
                    document.location.reload();
                } else {
                    errorBlock.classList.add('form__message--active');
                    errorBlock.textContent = responseText;
                }
            }
        };
    
        xhr.send(formData);
    });
}

// Выход из личного кабинета
const exitBtn = document.getElementById('exitBtn');

if(exitBtn) {
    exitBtn.addEventListener('click', (e) => {
        e.preventDefault();
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'ajax/exit.php');
    
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4 && xhr.status === 200) {
                document.location.reload();
            }
        };
    
        xhr.send();
    });
}

// Добавление статей в БД
const addForm = document.getElementById('add-form');
const articleSendBtn = document.getElementById('article_send'); 

if(addForm) {
    addForm.addEventListener('submit', (e) => {
        e.preventDefault();
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'ajax/add_article.php');
    
        const formData = new FormData(addForm);
    
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4 && xhr.status === 200) {
                const responseText = xhr.responseText;
                if(responseText === 'Готово') {
                    articleSendBtn.textContent = 'Всё готово';
                    errorBlock.classList.remove('form__message--active');
                    alert('Статья добавлена в БД!');
                    addForm.reset();
                } else {
                    errorBlock.classList.add('form__message--active');
                    errorBlock.textContent = responseText;
                }
            }
        };
    
        xhr.send(formData);
    });
}

// Отправка сообщения
const sendForm = document.getElementById('send-form');
const messSendBtn = document.getElementById('mess_send');

if(sendForm) {
    sendForm.addEventListener('submit', (e) => {
        e.preventDefault();
    
        const xhr = new XMLHttpRequest();
    
        xhr.open('POST', 'ajax/mail.php');
    
        const formData = new FormData(sendForm);
    
        xhr.onreadystatechange = () => {
            if(xhr.readyState === 4 && xhr.status === 200) {
                const responseText = xhr.responseText;
                if(responseText === 'Готово') {
                    messSendBtn.textContent = 'Всё готово';
                    errorBlock.classList.remove('form__message--active');
                    alert('Форма отправлена успешно!');
                    sendForm.reset();
                } else {
                    errorBlock.classList.add('form__message--active');
                    errorBlock.textContent = responseText;
                }
            }
        };
    
        xhr.send(formData);
    });
}