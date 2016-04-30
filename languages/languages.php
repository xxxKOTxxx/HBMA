<?php
  /***** Translations file *****/
  /*** Translations functions ***/
  function translate($data, $translate = true) {
    if($translate) {
      $result = $data[$_SESSION['language']];
    }
    else {
      $result = $data;
    }
    echo $result;
  };

  function set($data, $check = false, $replace = false) {
    if($check) {
      if(!isset($data) || !$data) {
        return false;
      }
    }
    if($replace) {
      $data = $replace;
    }
    echo $data;
  };
  
  /*** Common translations ***/
  $languages['common'] = array(
    'shadow' => array(
      'heading' => array(
        'en' => 'HBMA',
        'ru' => 'HBMA',
        'uk' => 'HBMA'
      ),
      'subheading' => array(
        'en' => 'International',
        'ru' => 'International',
        'uk' => 'International'
      )
    ),
    'call' => array(
      'en' => 'Contact us',
      'ru' => 'Связаться',
      'uk' => "Зв'язатися"
    ),
  );

  /*** Menu translations ***/
  $languages['menu'] = array(
    'top' => array(
      array(
        'heading' => array(
          'en' => 'HBMA',
          'ru' => 'HBMA',
          'uk' => 'HBMA'
        ),
        'subheading' => array(
          'en' => 'International',
          'ru' => 'International',
          'uk' => 'International'
        ),
        'title' => array(
          'en' => 'HBMA International',
          'ru' => 'HBMA International',
          'uk' => 'HBMA International'
        ),
        'url' => '.',
        'icon' => 'logo'
      ),
      array(
        'heading' => array(
          'en' => 'Accounting',
          'ru' => 'Бухгалтер',
          'uk' => 'Бухгалтер'
        ),
        'subheading' => array(
          'en' => 'outsourcing',
          'ru' => 'аутсорсинг',
          'uk' => 'аутсорсинг'
        ),
        'title' => array(
          'en' => 'Accounting outsourcing',
          'ru' => 'Бухгалтер аутсорсинг',
          'uk' => 'Бухгалтер аутсорсинг'
        ),
        'url' => 'accountant'
      ),
      array(
        'heading' => array(
          'en' => 'Legal',
          'ru' => 'Юридическая',
          'uk' => 'Юридична'
        ),
        'subheading' => array(
          'en' => 'support',
          'ru' => 'поддержка',
          'uk' => 'підтримкаг'
        ),
        'title' => array(
          'en' => 'Legal support',
          'ru' => 'Юридическая поддержка',
          'uk' => 'Юридична підтримкаг'
        ),
        'url' => 'legal'
      ),
      array(
        'heading' => array(
          'en' => 'Legalization',
          'ru' => 'Легализация',
          'uk' => 'Легалізація'
        ),
        'subheading' => array(
          'en' => 'documentation',
          'ru' => 'документации',
          'uk' => 'документів'
        ),
        'title' => array(
          'en' => 'Legalization documentation',
          'ru' => 'Легализация документации',
          'uk' => 'Легалізація документів'
        ),
        'url' => 'legalization'
      ),
      array(
        'heading' => array(
          'en' => 'Translation',
          'ru' => 'Перевод',
          'uk' => 'Переклад'
        ),
        'subheading' => array(
          'en' => 'of any complexity',
          'ru' => 'любой сложности',
          'uk' => 'будь-якої складності'
        ),
        'title' => array(
          'en' => 'Translation of any complexity',
          'ru' => 'Перевод любой сложности',
          'uk' => 'Переклад будь-якої складності'
        ),
        'url' => 'translation'
      )
    ),
    'bottom' => array(
      array(
        'heading' => array(
          'en' => 'Reviews',
          'ru' => 'Отзывы',
          'uk' => 'Відгуки'
        ),
        'title' => array(
          'en' => 'Reviews',
          'ru' => 'Отзывы',
          'uk' => 'Відгуки'
        ),
        'url' => 'reviews'
      ),
      array(
        'heading' => array(
          'en' => 'Contacts',
          'ru' => 'Контакты',
          'uk' => 'Контакти'
        ),
        'title' => array(
          'en' => 'Contacts',
          'ru' => 'Контакты',
          'uk' => 'Контакти'
        ),
        'url' => 'contacts'
      )
    ),
    'languages' => array(
      array(
        'heading' => array(
          'en' => 'En',
          'ru' => 'En',
          'uk' => 'En'
        ),
        'title' => array(
          'en' => 'English',
          'ru' => 'Английский',
          'uk' => 'Англiйська'
        ),
        'locale' => 'en_US',
        'id' => 'en'
      ),
      array(
        'heading' => array(
          'en' => 'Ru',
          'ru' => 'Ru',
          'uk' => 'Ru'
        ),
        'title' => array(
          'en' => 'Russian',
          'ru' => 'Русский',
          'uk' => 'Українська'
        ),
        'locale' => 'ru_RU',
        'id' => 'ru'
      ),
      array(
        'heading' => array(
          'en' => 'Ua',
          'ru' => 'Ua',
          'uk' => 'Ua'
        ),
        'title' => array(
          'en' => 'Ukrainian',
          'ru' => 'Украинский',
          'uk' => 'Українська'
        ),
        'locale' => 'uk_UA',
        'id' => 'uk'
      )
    )
  );

  /*** Main page translations ***/
  $languages['main'] = array(
    'slider' => array(
      array(
        'background' => './images/slide-1.jpg',
        'background' => './images/slide-1.jpg',
        'heading' => array(
          'en' => 'Нет ничего проще',
          'ru' => 'Нет ничего проще',
          'uk' => 'Нет ничего проще'
        ),
        'subheading' => array(
          'en' => 'достижения высот',
          'ru' => 'достижения высот',
          'uk' => 'достижения высот'
        ),
      ),
      array(
        'background' => './images/slide-1.jpg',
        'background' => './images/slide-1.jpg',
        'heading' => array(
          'en' => 'Нет ничего',
          'ru' => 'Нет ничего',
          'uk' => 'Нет ничего'
        ),
        'subheading' => array(
          'en' => 'достижения проще',
          'ru' => 'достижения проще',
          'uk' => 'достижения проще'
        ),
      ),
      array(
        'background' => './images/slide-1.jpg',
        'background' => './images/slide-1.jpg',
        'heading' => array(
          'en' => 'Нет высот',
          'ru' => 'Нет высот',
          'uk' => 'Нет высот'
        ),
        'subheading' => array(
          'en' => 'достижения ничего',
          'ru' => 'достижения ничего',
          'uk' => 'достижения ничего'
        ),
      ),
    ),
    'about' => array(
      'title' => array(
        'en' => 'HBMA',
        'ru' => 'HBMA',
        'uk' => 'HBMA'
      ),
      'text' => array(
        'en' => 'Мы — компания, ориентированная на оказание качественных услуг бухгалтерского аутсорсинга, юридической поддержки, легализации документации и перевода любой сложности. Обратившись к нам, вы гарантированно получите по настоящему лучший результат.',
        'ru' => 'Мы — компания, ориентированная на оказание качественных услуг бухгалтерского аутсорсинга, юридической поддержки, легализации документации и перевода любой сложности. Обратившись к нам, вы гарантированно получите по настоящему лучший результат.',
        'uk' => 'Мы — компания, ориентированная на оказание качественных услуг бухгалтерского аутсорсинга, юридической поддержки, легализации документации и перевода любой сложности. Обратившись к нам, вы гарантированно получите по настоящему лучший результат.'
      ),
    ),
    'advantages_title' => array(
      'en' => 'Преимущества работы с нами',
      'ru' => 'Преимущества работы с нами',
      'uk' => 'Преимущества работы с нами'
    ),
    'advantages' => array(
      array(
        'class' => 'quality',
        'title' => array(
          'en' => 'Quality',
          'ru' => 'Качество',
          'uk' => 'Якість'
        ),
        'text' => array(
          'en' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.',
          'ru' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.',
          'uk' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.'
        )
      ),
      array(
        'class' => 'convenience',
        'title' => array(
          'en' => 'Convenience',
          'ru' => 'Удобство',
          'uk' => 'Зручність'
        ),
        'text' => array(
          'en' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.',
          'ru' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.',
          'uk' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.'
        )
      ),
      array(
        'class' => 'economy',
        'title' => array(
          'en' => 'Economy',
          'ru' => 'Экономия',
          'uk' => 'Економія'
        ),
        'text' => array(
          'en' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.',
          'ru' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.',
          'uk' => 'Таким образом рамки и место обучения кадров позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.'
        )
      ),
      array(
        'class' => 'privacy',
        'title' => array(
          'en' => 'Privacy',
          'ru' => 'Приватность',
          'uk' => 'Приватність'
        ),
        'text' => array(
          'en' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.',
          'ru' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.',
          'uk' => 'Разнообразный и богатый опыт сложившаяся структура организации обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям.'
        )
      ),
    ),
  );
  /*** Reviews page translations ***/
  $languages['reviews'] = array(
    'title' => array(
      'en' => 'Reviews',
      'ru' => 'Отзывы',
      'uk' => 'Відгуки'
    ),
    'slider' => array(
      array(
        'author' => array(
          'en' => 'Helen',
          'ru' => 'Елена',
          'uk' => 'Олена'
        ),
        'rate' => 4,
        'text' => array(
          'en' => 'Good afternoon! I want to say thanks for a great job! HBMA works perfectly. Rapid, timely performance of tasks. Sometimes you sit for hours looking for, how much it costs, what time, quality. But with everything else HBMA. No need to go anywhere, went to the site and made the choice. Call in advance, make the time. One word CLASS organization. I recommend!',
          'ru' => 'Добрый день! Хочу сказать Огромное спасибо за отличную работу! HBMA работает на отлично. Быстрое, своевременное выполнение заданий. Иногда сидишь и часами ищешь, сколько стоит, какие сроки, качество. А вот с HBMA всё иначе. Не надо никуда идти, зашла на сайт и выбор сделала. Позвонят заранее, сделают вовремя. Одним словом КЛАССНАЯ организация. Рекомендую!',
          'uk' => 'Добридень! Хочу сказати Величезне спасибі за відмінну роботу! HBMA працює на відмінно. Швидке, своєчасне виконання завдань. Іноді сидиш і годинами шукаєш, скільки коштує, які терміни, якість. А ось з HBMA все інакше. Не треба нікуди йти, зайшла на сайт і вибір зробила. Подзвонять заздалегідь, зроблять вчасно. Одним словом КЛАССНАЯ організація. Рекомендую!'
        ),
      ),
      array(
        'author' => array(
          'en' => 'Boris',
          'ru' => 'Борис',
          'uk' => 'Борис'
        ),
        'rate' => 3,
        'text' => array(
          'en' => 'Good afternoon! I want to say thanks for a great job! HBMA works perfectly. Rapid, timely performance of tasks. Sometimes you sit for hours looking for, how much it costs, what time, quality. But with everything else HBMA. No need to go anywhere, went to the site and made the choice. Call in advance, make the time. One word CLASS organization. I recommend!',
          'ru' => 'Добрый день! Хочу сказать Огромное спасибо за отличную работу! HBMA работает на отлично. Быстрое, своевременное выполнение заданий. Иногда сидишь и часами ищешь, сколько стоит, какие сроки, качество. А вот с HBMA всё иначе. Не надо никуда идти, зашла на сайт и выбор сделала. Позвонят заранее, сделают вовремя. Одним словом КЛАССНАЯ организация. Рекомендую!',
          'uk' => 'Добридень! Хочу сказати Величезне спасибі за відмінну роботу! HBMA працює на відмінно. Швидке, своєчасне виконання завдань. Іноді сидиш і годинами шукаєш, скільки коштує, які терміни, якість. А ось з HBMA все інакше. Не треба нікуди йти, зайшла на сайт і вибір зробила. Подзвонять заздалегідь, зроблять вчасно. Одним словом КЛАССНАЯ організація. Рекомендую!'
        ),
      ),
    ),
    'message' => array(
      'title' => array(
          'en' => 'Оставить отзыв',
          'ru' => 'Оставить отзыв',
          'uk' => 'Оставить отзыв'
        ),
      'text' => array(
          'en' => 'Будем благодарны за Ваш комментарий',
          'ru' => 'Будем благодарны за Ваш комментарий',
          'uk' => 'Будем благодарны за Ваш комментарий'
        ),
    )
  )
?>