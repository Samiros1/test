<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Test</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/main.css')}}" type="text/css"/>
</head>
<body>
  <div class="wrapper">
    <main class="main-content">
      <div class="my-profile">
        <h2 class="heading">Мой профиль</h2>
        <div class="profile">
          <div class="avatar">
            <img src="{{asset('/img/image.jpg')}}" alt="Аватар" class="avatar__pic">
          </div>
          <div class="information">
            <div class="nickname">{{ (isset($nickname)?$nickname:'') }}</div>
            <div class="user-name">
              <span class="name">{{ (isset($name)?$name:'') }}</span>
              <span class="surname">{{ (isset($surname)?$surname:'') }}</span>
            </div>
            <a href='tel:+11111111' class="phone">{{ (isset($phone)?'+'.$phone:'') }}</a>
          </div>
        </div>
      </div>
      <div class='edit-profile'>
        <h2 class="heading">Редактировать профиль</h2>
        <form action="{{ url('/profile/create/') }}" class='form' id='form' name='form' method='POST' enctype='multipart/form-data'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
          <ul class="form__list">
            <li class="form__item">
              <label class='form__label' for="nickname">Никнейм:</label>
              <input class='form__input' name='nickname' type="text" value='' required >
            </li>
            <li class="form__item">
              <label class='form__label' for="name">Имя:</label>
              <input class='form__input' name='name' type="text" value='' required >
            </li>
            <li class="form__item">
              <label class='form__label' for="surname">Фамилия:</label>
              <input class='form__input' name='surname' type="text" value='' required >
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="avatar">Аватар:</label>
              <input class='form__inline-input' name='avatar' type="file" value='image/jpeg,image/png'>
            </li>
            <li class="form__item">
              <label class='form__label' for="phone">Телефон:</label>
              <input class='form__input' name='phone' type="text" value='' pattern="[0-9]{11}" placeholder="11 цифр" required >
            </li>
            <li class="form__item">
              <div class="form__title">Пол:</div>
              <label class='form__inline-label' for="male">Мужской</label>
              <input class='form__inline-input' name='sex' id='male' type="radio" value='1'>
              <label class='form__inline-label' for="female">Женский</label>
              <input class='form__inline-input' name='sex' id='female' type="radio" value='0' checked>
            </li>
            <li class="form__item">
              <label class='form__inline-label' for="showPhone">Я согласен получать email-рассылку</label>
              <input class='form__inline-input' name='showPhone' type="checkbox" id='showPhone' value='1'>
            </li>
            <li class="form__item">
              <button class='form__button' type="submit">Отправить</button>
            </li>
          </ul>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
