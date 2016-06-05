<?php
  /***** Translations file *****/
  /*** Translations functions ***/
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
    return;
  };

  function setLink($data, $type) {
    switch($type) {
      case 'phone':
        echo 'tel:'.preg_replace('/\D/', '', $data);
        break;
      case 'email':
        echo 'mailto:'.trim($data);
        break;
      default:
        break;
    }
    return;
  }
  
  /*** Common translations ***/
  $languages['common'] = array(
    'site' => array(
      'heading' => 'HBMA',
      'subheading' => 'International',
      'title' => 'HBMA International',
      'url' => '.'
    ),
    'mobile' => array(
      'close' => array(
        'en' => 'Сlose',
        'ru' => 'Закрыть',
        'uk' => 'Закрити'
      ),
      'menu' => array(
        'en' => 'Menu',
        'ru' => 'Меню',
        'uk' => 'Меню'
      )
    ),
    'call' => array(
      'en' => 'Contact us',
      'ru' => 'Связаться',
      'uk' => 'Зв`язатися'
    ),
    'send' => array(
      'en' => 'Send',
      'ru' => 'Отправить',
      'uk' => 'Відправити'
    ),
    'order' => array(
      'en' => 'Order',
      'ru' => 'Заказать',
      'uk' => 'Замовити'
    ),
    'contacts_url' => 'contacts',
    'mailer' => array(
      'sent' => array(
        'en' => 'Message has been sent',
        'ru' => 'Сообщение отправлено',
        'uk' => 'Повідомлення відправлено'
      ),
      'error' => array(
        'en' => 'Message could not be sent.<br>Error: ',
        'ru' => 'Сообщение не отправлено.<br>Ошибка: ',
        'uk' => 'Повідомлення не відправлено.<br>Помилка: ',
      ),
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
          'en' => 'Account Services',
          'ru' => 'Услуги Бухгалтера',
          'uk' => 'Послуги Бухгалтера'
        ),
        'subheading' => array(
          'en' => 'professional support',
          'ru' => 'проф. сопровождение',
          'uk' => 'професійне супроводження'
        ),
        'title' => array(
          'en' => 'Accounting support',
          'ru' => 'Бухгалтерское сопровождение',
          'uk' => 'Бухгалтерське супроводження'
        ),
        'url' => 'accountant'
      ),
      array(
        'heading' => array(
          'en' => 'Legal help',
          'ru' => 'Помощь юриста',
          'uk' => 'Допомога юриста'
        ),
        'subheading' => array(
          'en' => 'qualified support',
          'ru' => 'квалифицированная поддержка',
          'uk' => 'кваліфікована підтримка'
        ),
        'title' => array(
          'en' => 'Legal support',
          'ru' => 'Юридическая поддержка',
          'uk' => 'Юридична підтримка'
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
          'en' => 'registrarion of any product',
          'ru' => 'регистрация любой продукции',
          'uk' => 'регістрація будь-якого продукту'
        ),
        'title' => array(
          'en' => 'Legalization of product',
          'ru' => 'Легализация продукции',
          'uk' => 'Легалізація продукції'
        ),
        'url' => 'legalization'
      ),
      array(
        'heading' => array(
          'en' => 'Text Translation',
          'ru' => 'Перевод текста',
          'uk' => 'Переклад тексту'
        ),
        'subheading' => array(
          'en' => 'of any language and theme',
          'ru' => 'независимо от языка и темы',
          'uk' => 'незалежно від мови та теми'
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
        'heading' => 'UA',
        'title' => array(
          'en' => 'Ukrainian',
          'ru' => 'Украинский',
          'uk' => 'Українська'
        ),
        'locale' => 'uk_UA',
        'id' => 'uk'
      ),
      array(
        'heading' => 'RU',
        'title' => array(
          'en' => 'Russian',
          'ru' => 'Русский',
          'uk' => 'Українська'
        ),
        'locale' => 'ru_RU',
        'id' => 'ru'
      ),
      array(
        'heading' => 'EN',
        'title' => array(
          'en' => 'English',
          'ru' => 'Английский',
          'uk' => 'Англiйська'
        ),
        'locale' => 'en_US',
        'id' => 'en'
      ),
    )
  );

  /*** Main page translations ***/
  $languages['main'] = array(
    'slider' => array(
      array(
        'background' => './images/slide-1.jpg',
        'background' => './images/slide-1.jpg',
        'heading' => array(
          'en' => 'There`s nothing easier than',
          'ru' => 'Нет ничего проще',
          'uk' => 'Немає нічого простішого за'
        ),
        'subheading' => array(
          'en' => 'reaching hights',
          'ru' => 'достижения высот',
          'uk' => 'досягнення висот'
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
        'en' => 'We are company that focused on the provision of high-quality accounting outsourcing services, legal support, legalization of documents and the translation of any complexity. Turning to us, you are guaranteed to get the best result.',
        'ru' => 'Мы — компания, ориентированная на оказание качественных услуг бухгалтерского аутсорсинга, юридической поддержки, легализации документации и перевода любой сложности. Обратившись к нам, вы гарантированно получите по настоящему лучший результат.',
        'uk' => 'Ми - компанія, орієнтована на надання якісних послуг бухгалтерського аутсорсингу, юридичної підтримки, легалізації документації та перекладу будь-якої складності. Звернувшись до нас, ви гарантовано отримаєте по справжньому кращий результат.'
      ),
    ),
    'advantages' => array(
      'title' => array(
        'en' => 'Advantages of working with us',
        'ru' => 'Преимущества работы с нами',
        'uk' => 'Переваги роботи з нами'
      ),
      'data' => array(
        array(
          'class' => 'quality',
          'title' => array(
            'en' => 'Quality',
            'ru' => 'Качество',
            'uk' => 'Якість'
          ),
          'text' => array(
            'en' => 'We conduct internal certification personnel, raise their qualification and track the quality of our customers service.',
            'ru' => 'С Вами будет работать команда тщательно отобранных профессионалов с большим опытом  решения задач любой сложности. Проводим внутреннюю аттестацию персонала, повышаем его квалификацию и осуществляем контроль качества обслуживания наших клиентов.',
            'uk' => 'З Вами буде працювати команда ретельно відібраних професіоналів з великим досвідом вирішення завдань будь-якої складності. Проводимо внутрішню атестацію персоналу, підвищуємо його кваліфікацію та здійснюємо контроль якості обслуговування наших клієнтів.'
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
            'en' => 'Absence of archives, collections, processing and delivery of documentation. You will always receive timely progress reports.',
            'ru' => 'Отсутствие архивов, сбора, обработки и подачи документации. От нас Вы всегда получите своевременный отчет о проделанной работе.',
            'uk' => 'Відсутність архівів, збору, обробки та подачі документації. Від нас Ви завжди отримаєте своєчасний звіт про виконану роботу.'
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
            'en' => 'You pay only for the operations we made and save your time and money that you could spend on searching for personnel, equipment jobs, wages, benefits, staff training and supervision tasks.',
            'ru' => 'Работая с нами, Вы платите только за выполненные операции, и экономите деньги и время на поиск персонала, оснащение  рабочих мест, выплат заработной платы, обучение кадров и контроль выполнения задач.',
            'uk' => 'Працюючи з нами, Ви сплачуєте тільки за фактично виконані операції, відповідно економите ресурс часу на відбір якісного персоналу, створення і оснащення робочих місць, виплат заробітної плати, навчання кадрів і контроль виконання завдань.'
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
            'en' => 'All the information you provide is strictly confidential, which is supported by the bilateral agreement on non-disclosure.',
            'ru' => 'Вся предоставленная Вами информация является строго конфиденциальной, что подкреплено двухсторонним договором о неразглашении.',
            'uk' => 'Вся надана Вами інформація є конфіденційною, що підкріплено двостороннім договором про нерозголошення.'
          )
        )
      )
    )
  );

  /*** Accountant page translations ***/
  $languages['accountant'] = array(
    'title' => array(
      'en' => 'Accounting support',
      'ru' => 'Бухгалтерское сопровождение',
      'uk' => 'Бухгалтерське супроводження'
    ),
    'text' => array(
      'en' => 'Our support is not just reporting the conduct, but also optimization of your business. We will help you to establish or restore the financial and tax accounting, outsourcing of payroll, tax audit of the enterprise and more. You can be sure of individual approach, operational and qualitative problem solving.',
      'ru' => 'Наша поддержка заключается не только в  ведении отчетности, но и в оптимизации  работы вашего предприятия. Мы поможем наладить или восстановить бухгалтерский и налоговый учет, аутсорсинг расчета заработной платы, налоговый аудит работы предприятия и многое другое.  Обращаясь к нам, Вы можете  быть уверены в индивидуальном подходе, оперативном и качественном  решении задач.',
      'uk' => 'Наша підтримка полягає не тільки у веденні звітності, але й в оптимізації роботи вашого підприємства. Ми допоможемо налагодити або відновити бухгалтерський і податковий облік, аутсорсинг розрахунку заробітної плати, податковий аудит роботи підприємства і багато іншого. Звертаючись до нас, Ви можете бути впевнені в індивідуальному підході, оперативному і якісному вирішенні завдань.'
    ),
    'services' => array(
      'title' => array(
        'en' => 'Services',
        'ru' => 'Услуги',
        'uk' => 'Послуги'
      ),
      'text' => array(
        'en' => 'For individuals and legal entities',
        'ru' => 'Для физических и юридических лиц',
        'uk' => 'Для фізичних та юридичних осіб'
      ),
      'data' => array(
        array(
          'en' => 'Processing and management of business operations in 1C',
          'ru' => 'Обработка и ведение хозяйственных операций в 1С',
          'uk' => 'Обробка і ведення господарських операцій в 1С'
        ),
        array(
          'en' => 'Drawing up and registration of tax bills',
          'ru' => 'Составление и регистрация налоговых накладных',
          'uk' => 'Складання та реєстрація податкових накладних'
        ),
        array(
          'en' => 'Preparation and submission of reports',
          'ru' => 'Подготовка и сдача отчетности',
          'uk' => 'Підготовка і здача звітності'
        ),
        array(
          'en' => 'Collection and verification of primary documentation',
          'ru' => 'Сбор и проверка первичной документации',
          'uk' => 'Збір і перевірка первинної документації'
        ),
        array(
          'en' => 'HR outsourcing',
          'ru' => 'Кадровое делопроизводство',
          'uk' => 'Кадрове діловодство'
        ),
        array(
          'en' => 'Advice on tax and accounting',
          'ru' => 'Консультация по налоговому и бухгалтерскому учету',
          'uk' => 'Консультація з податкового та бухгалтерського обліку'
        ),
        array(
          'en' => 'Optimization of taxation',
          'ru' => 'Оптимизация налогообложения',
          'uk' => 'Оптимізація оподаткування'
        ),
        array(
          'en' => 'Archiving and storage of documents',
          'ru' => 'Архивация и хранение документов',
          'uk' => 'Архівація і зберігання документів'
        ),
        array(
          'en' => 'Participation in passing tests',
          'ru' => 'Участие в прохождении проверок',
          'uk' => 'Участь в проходженні перевірок'
        )
      )
    ),
    'calculator' => array(
      'title' => array(
        'en' => 'Calculator',
        'ru' => 'Калькулятор',
        'uk' => 'Калькулятор'
      ),
      'text' => array(
        'en' => 'Find out the cost for you',
        'ru' => 'Узнайте стоимость именно для вас',
        'uk' => 'Дізнайтесь вартість саме  для вас'
      ),
      'result' => array(
        'en' => 'Result',
        'ru' => 'Результат',
        'uk' => 'Результат'
      ),
      'data' => array(
        array(
          'title' => array(
            'en' => 'Select your activity',
            'ru' => 'Вид вашей деятельности',
            'uk' => 'Вид вашої діяльності'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => '',
              'prefix' => '',
              'units' => ''
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => '',
              'prefix' => '',
              'units' => ''
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => '',
              'prefix' => '',
              'units' => ''
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => '',
              'prefix' => '',
              'units' => ''
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operatio',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Services',
            'ru' => 'Услуги',
            'uk' => 'Послуги'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'От 1 до 3 операций'
              ),
              'price' => 800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 1200,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 1800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Trade',
            'ru' => 'Торговля',
            'uk' => 'Торгівля'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operation',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 1500,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 2000,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Production',
            'ru' => 'Производство',
            'uk' => 'Виробництво'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 800,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 1700,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 2200,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операций'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Tourism',
            'ru' => 'Туристическая деятельность',
            'uk' => 'Туристична діяльність'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 1800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 2300,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Foreign economic activity',
            'ru' => 'Внешнеэкономическая деятельность',
            'uk' => 'Зовнішньоекономічна діяльність'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 800,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 2000,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 2300,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contrac',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Representation of non-resident',
            'ru' => 'Представительство нерезидента',
            'uk' => 'Представництво нерезидента'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 800,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operation',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 2300,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month.',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 2800,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/міcяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Entepreneur',
            'ru' => 'Физическое лицо - предприниматель',
            'uk' => 'Физична особа - підприємець'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Without operations',
                'ru' => 'Без операций',
                'uk' => 'Без операцій'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 1 to 3 operations',
                'ru' => 'От 1 до 3 операций',
                'uk' => 'Від 1 до 3 операцій'
              ),
              'price' => 500,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH/quarter',
                'ru' => 'грн/квартал',
                'uk' => 'грн/квартал'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 4 to 30 operations',
                'ru' => 'От 4 до 30 операций',
                'uk' => 'Від 4 до 30 операцій'
              ),
              'price' => 1000,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month.',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'From 31 to 50 operations',
                'ru' => 'От 31 до 50 операций',
                'uk' => 'Від 31 до 50 операцій'
              ),
              'price' => 1300,
              'prefix' => '',
              'units' => array(
                'en' => 'UAH/month.',
                'ru' => 'грн/меcяц',
                'uk' => 'грн/місяць'
              )
            ),
            array(
              'title' => array(
                'en' => 'Above 50 operations',
                'ru' => 'Свыше 50 операций',
                'uk' => 'Понад 50 операцій'
              ),
              'price' => 'Contract',
              'prefix' => '',
              'units' => ''
            )
          )
        )
      )
    )
  );

  /*** Legal page translations ***/
  $languages['legal'] = array(
    'title' => array(
      'en' => 'Legal Aid',
      'ru' => 'Юридическая помощь',
      'uk' => 'Юридична допомога'
    ),
    'text' => array(
      'en' => 'By providing legal assistance, our team takes the specifics into account of your business, and especially the legislative framework. We are ready to provide a single legal assistance and abonementskoe service at convenient for you cooperation period.',
      'ru' => 'Предоставляя юридическую помощь, наша команда учитывает специфику вашего бизнеса и особенности законодательной базы. Готовы предоставить как разовую юридическую помощь, так и абонементское обслуживание на удобный для вас период  сотрудничества.',
      'uk' => 'Надаючи юридичну допомогу, наша команда враховує специфіку вашого бізнесу і особливості законодавчої бази. Ми надамо Вам як разову юридичну допомогу, так і Абонементське обслуговування на зручний для вас період співпраці.'
    ),
    'services' => array(
      'title' => array(
        'en' => 'Services',
        'ru' => 'Услуги',
        'uk' => 'Послуги'
      ),
      'text' => array(
        'en' => 'For individuals and legal entities',
        'ru' => 'Для физических и юридических лиц',
        'uk' => 'Для фізичних та юридичних осіб'
      ),
      'data' => array(
        array(
          'en' => 'Organization of the corporate structure of any specifics of the business, taking tax law into account',
          'ru' => 'Организация корпоративной структуры компании любой специфики бизнеса с учетом налогового права',
          'uk' => 'Організація корпоративної структури компанії будь-якої специфіки бізнесу з урахуванням податкового права'
        ),
        array(
          'en' => 'Preparation and execution of the founding and working documents',
          'ru' => 'Подготовка и оформление учредительной и рабочей документации',
          'uk' => 'Підготовка і оформлення установчої і робочої документації'
        ),
        array(
          'en' => 'Logging, reorganization and liquidation of legal entities and individuals of any legal and organizational form of ownership',
          'ru' => 'Регистрирование, переорганизация и ликвидация юридических и физических лиц любых правовых и организационных форм собственности',
          'uk' => 'Реєстрування, переорганізація і ліквідація юридичних та фізичних осіб будь-яких правових та організаційних форм власності'
        ),
        array(
          'en' => 'Legal service',
          'ru' => 'Юридическое обслуживание',
          'uk' => 'Юридичне обслуговування'
        ),
        array(
          'en' => 'Legal protection of commercial secrets of the legal entity',
          'ru' => 'Правовая защита коммерческой тайны юридического лица',
          'uk' => 'Правовий захист комерційної таємниці юридичної особи'
        ),
        array(
          'en' => 'Protection of corporate rights and interests in court',
          'ru' => 'Защита корпоративных прав и интересов в суде',
          'uk' => 'Захист корпоративних прав та інтересів в суді'
        ),
        array(
          'en' => 'Solution of corporate disputes',
          'ru' => 'Решение корпоративных споров',
          'uk' => 'Рішення корпоративних суперечок'
        ),
        array(
          'en' => 'Reorganization of foreign holdings in Ukraine',
          'ru' => 'Реорганизация зарубежных холдингов в Украине',
          'uk' => 'Реорганізація зарубіжних холдингів в Україні'
        ),
        array(
          'en' => 'Obtaining permission to conduct business from government agencies',
          'ru' => 'Получение разрешений на ведение бизнеса от государственных органов',
          'uk' => 'Отримання дозволів на ведення бізнесу від державних органів'
        ),
        array(
          'en' => 'Meetings of directors, shareholders',
          'ru' => 'Проведение собраний директоров, акционеров',
          'uk' => 'Проведення зборів директорів, акціонерів'
        ),
        array(
          'en' => 'Risk analysis in the sale of the legal entity (audit)',
          'ru' => 'Анализ рисков при купле-продаже юридического лица (аудит)',
          'uk' => 'Аналіз ризиків при купівлі-продажу юридичної особи (аудит)'
        ),
        array(
          'en' => 'Consultation on the implementation of business transactions with the company assets',
          'ru' => 'Консультации по осуществлению хозяйственных операций с активами предприятия',
          'uk' => 'Консультації по здійсненню господарських операцій з активами підприємства'
        ),
        array(
          'en' => 'Establishment of branches and representative offices of legal entities',
          'ru' => 'Создание филиалов и открытие представительств юридических лиц',
          'uk' => 'Створення філій та представництв юридичних осіб'
        ),
        array(
          'en' => 'Preparation of orders, certificates, official letters (replies to letters), appeals and other legal documents that necessary for the conduct of business enterprises',
          'ru' => 'Составление приказов, справок, официальных писем (ответов на письма), обращений и других юридических документов, необходимых для ведения хозяйственной деятельности предприятия',
          'uk' => 'Складання наказів, довідок, офіційних листів звернень та інших юридичних документів, необхідних для ведення господарської діяльності підприємства'
        ),
      )
    ),
    'prices' => array(
      'title' => array(
        'en' => 'Prices',
        'ru' => 'Цены',
        'uk' => 'Ціни'
      ),
      'text' => array(
        'en' => 'All fees and notarials are included',
        'ru' => 'Все госплатежи и нотариальные затраты включены в стоимость',
        'uk' => 'Усі держплатежі і нотаріальні витрати включені у вартість'
      ),
      'units' => array(
        'en' => 'UAH',
        'ru' => 'грн',
        'uk' => 'грн'
      ),
      'data' => array(
        array(
          'title' => array(
                'en' => 'Register',
                'ru' => 'Регистрация',
                'uk' => 'Регистрация'
              ),
          'price' => array(
            array(
              'title' => array(
                'en' => 'Ltd., PP (1 founder)',
                'ru' => 'ООО, ЧП (1 основатель)',
                'uk' => 'ООО, ПП (1 засновник)'
              ),
              'price' => 1200
            ),
            array(
              'title' => array(
                'en' => 'Subject of Business',
                'ru' => 'СПД',
                'uk' => 'СПД'
              ),
              'price' => 700
            ),
            array(
              'title' => array(
                'en' => 'Cooperative',
                'ru' => 'Кооператива',
                'uk' => 'Кооператива'
              ),
              'price' => 2500
            ),
            array(
              'title' => array(
                'en' => 'Public organization',
                'ru' => 'Общественной организации',
                'uk' => 'Громадської організації'
              ),
              'price' => 2500
            ),
            array(
              'title' => array(
                'en' => 'Trademark',
                'ru' => 'Торговой марки',
                'uk' => 'Торгівельної марки'
              ),
              'price' => 2500
            ),
            array(
              'title' => array(
                'en' => 'Legal address in Kiev',
                'ru' => 'Юридического адреса в Киеве',
                'uk' => 'Юридичної адреси в Києві'
              ),
              'price' => 2500
            ),
            array(
              'title' => array(
                'en' => '+ mail service',
                'ru' => '+ почтовое обслуживание',
                'uk' => '+ поштове обслуговування'
              ),
              'price' => 1200,
              'class' => 'additional'
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Liquidation',
            'ru' => 'Ликвидация',
            'uk' => 'Ліквідація'
          ),
          'price' => array(
            array(
              'title' => array(
                'en' => 'Legal enterprise',
                'ru' => 'Юридического предприятия',
                'uk' => 'Юридичного підприємства'
              ),
              'price' => 5000,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              )
            ),
            array(
              'title' => array(
                'en' => 'Entepreneur',
                'ru' => 'ФЛП',
                'uk' => 'ФОП'
              ),
              'price' => 3000,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              )
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Additionally',
            'ru' => 'Дополнительно',
            'uk' => 'Додатково'
          ),
          'price' => array(
            array(
              'title' => array(
                'en' => 'Obtaining statements USREOU',
                'ru' => 'Получение выписки ЕГРПОУ',
                'uk' => 'Отримання выписки ЄДРПОУ'
              ),
              'price' => 250
            ),
            array(
              'title' => array(
                'en' => 'Statement on the account of the payer Single Tax, VAT',
                'ru' => 'Постановка на учёт плательщика Единого налога, НДС',
                'uk' => 'Постановка на облік платника єдиного податку, ПДВ'
              ),
              'price' => 300
            ),
            array(
              'title' => array(
                'en' => 'Print making',
                'ru' => 'Изготовление печати',
                'uk' => 'Виготовлення печатки'
              ),
              'price' => 300
            ),
            array(
              'title' => array(
                'en' => 'Preparation of contract draft',
                'ru' => 'Составление проекта договора',
                'uk' => 'Складання проекту договору'
              ),
              'price' => 300
            )
          )
        ),
        array(
          'title' => array(
            'en' => 'Change',
            'ru' => 'Изменение',
            'uk' => 'Зміна'
          ),
          'price' => array(
            array(
              'title' => array(
                'en' => 'Location',
                'ru' => 'Местонахождения',
                'uk' => 'Місцезнаходження'
              ),
              'price' => 1800
            ),
            array(
              'title' => array(
                'en' => 'Founders',
                'ru' => 'Состава учредителей',
                'uk' => 'Складу засновників'
              ),
              'price' => 1700
            ),
            array(
              'title' => array(
                'en' => 'Activity (CEA)',
                'ru' => 'Видов деятельности (КВЕД)',
                'uk' => 'Видів діяльності (КВЕД)'
              ),
              'price' => 400
            ),
            array(
              'title' => array(
                'en' => 'Name',
                'ru' => 'Названия',
                'uk' => 'Назви'
              ),
              'price' => 2000
            ),
            array(
              'title' => array(
                'en' => 'Director',
                'ru' => 'Директора',
                'uk' => 'Директора'
              ),
              'price' => 1200
            ),
            array(
              'title' => array(
                'en' => 'Authorised capital',
                'ru' => 'Уставного капитала',
                'uk' => 'Статутного капіталу'
              ),
              'price' => 1200
            ),
            array(
              'title' => array(
                'en' => 'Phone number',
                'ru' => 'Номера телефона',
                'uk' => 'Номера телефону'
              ),
              'price' => 200
            ),
            array(
              'title' => array(
                'en' => 'Entepreneur activity',
                'ru' => 'Вида деятельности ФЛП',
                'uk' => 'Вида діяльності ФОП'
              ),
              'price' => 400
            ),
            array(
              'title' => array(
                'en' => 'Entepreneur adress',
                'ru' => 'Адреса ФЛП',
                'uk' => 'Адреси ФОП'
              ),
              'price' => 900
            ),
            array(
              'title' => array(
                'en' => 'Entepreneur phone number',
                'ru' => 'Номера телефона ФЛП',
                'uk' => 'Номера телефону ФОП'
              ),
              'price' => 400
            )
          )
        )
      )
    ),
    'call_text' => array(
      'en' => 'We are ready to provide a one-time service, or offer you a package deal, which involves long-term cooperation, depending on your needs and wishes.',
      'ru' => 'Мы готовы предоставить услугу единоразово, или предложить вам пакет услуг, который предполагает долгосрочное сотрудничество, в зависимости от ваших потребностей и пожеланий.',
      'uk' => 'Ми готові надати послугу одноразово, або запропонувати вам пакет послуг, який передбачає довгострокову співпрацю, в залежності від ваших потреб і побажань.'
    )
  );

  /*** Legalization page translations ***/
  $languages['legalization'] = array(
    'title' => array(
      'en' => 'Legalization of product',
      'ru' => 'Легализация продукции',
      'uk' => 'Легализація продукції'
    ),
    'text' => array(
      'en' => 'Legalization of production is a complex and painstaking process: design, collection, filing the necessary documentation, and more. Our experience and professionalism will help you painlessly solve all stages of the process',
      'ru' => 'Легализации продукции - сложный и кропотливый процесс: оформление, сбор, подача необходимой документации и много другое. Наш опыт и профессионализм помогут Вам безболезненно разрешить все этапы данного процесса.',
      'uk' => 'Легалізація продукції, складний і копіткий процес: оформлення, збір, подача необхідної документації та багато іншого. Наш досвід і професіоналізм допоможуть Вам безболісно вирішити всі етапи даного процесу.'
    ),
    'services' => array(
      'title' => array(
        'en' => 'Services',
        'ru' => 'Услуги',
        'uk' => 'Послуги'
      ),
      'text' => array(
        'en' => 'For individuals and legal entities',
        'ru' => 'Для физических и юридических лиц',
        'uk' => 'Для фізичних та юридичних осіб'
      ),
      'data' => array(
        array(
          'en' => 'Registration of medical devices',
          'ru' => 'Регистрация медицинских изделий',
          'uk' => 'Реєстрація медичних виробів'
        ),
        array(
          'en' => 'Registration of medical equipmen',
          'ru' => 'Регистрация медицинской техники',
          'uk' => 'Реєстрація медичної техніки'
        ),
        array(
          'en' => 'Registration of drugs',
          'ru' => 'Регистрация лекарственных средств',
          'uk' => 'Реєстрація лікарських засобів'
        ),
        array(
          'en' => 'Registration of food and dietary supplements BAA',
          'ru' => 'Регистрация пищевых и диетических добавок (БАД)',
          'uk' => 'Реєстрація харчових і дієтичних добавок (БАД)'
        ),
        array(
          'en' => 'Registration of cosmetic products',
          'ru' => 'Регистрация косметической продукции',
          'uk' => 'Реєстрація косметичної продукції'
        ),
      ),
    ),
    'calculator' => array(
      'title' => array(
        'en' => 'Calculator',
        'ru' => 'Калькулятор',
        'uk' => 'Калькулятор'
      ),
      'text' => array(
        'en' => 'Find out the cost for you',
        'ru' => 'Узнайте стоимость именно для вас',
        'uk' => 'Дізнайтесь вартість саме для вас'
      ),
      'result' => array(
        'en' => 'Result',
        'ru' => 'Результат',
        'uk' => 'Результат'
      ),
      'units' => array(
        'en' => 'UAH',
        'ru' => 'грн',
        'uk' => 'грн'
      ),
      'data' => array(	  
		array(
          'title' => array(
            'en' => 'Type of document',
            'ru' => 'Тип документа',
            'uk' => 'Тип документу'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'Urgency',
                'ru' => 'Срочность',
                'uk' => 'Терміновість'
              ),
              'price' => '',
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
            ),
          ),
        ),	  
        array(
          'title' => array(
            'en' => 'Apostille (notarial documents)',
            'ru' => 'Апостиль (нотариальные документы)',
            'uk' => 'Апостиль (нотариальні документи)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 105,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
		array(
          'title' => array(
            'en' => 'Apostille (legal personnel)',
            'ru' => 'Апостиль (юридические лицо)',
            'uk' => 'Апостиль (юридична особа)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 175,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
		array(
          'title' => array(
            'en' => 'Apostille (Reg. Office documents)',
            'ru' => 'Апостиль (документы ЗАГС)',
            'uk' => 'Апостиль (документи ЗАГС)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '4 work days',
                'ru' => '4 рабочих дня',
                'uk' => '4 робочих дні'
              ),
              'price' => 105,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),
		array(
          'title' => array(
            'en' => 'Apostille (Foreign documents)',
            'ru' => 'Апостиль (документы МИД)',
            'uk' => 'Апостиль (документи МЗС)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 105,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
		array(
          'title' => array(
            'en' => 'Apostille (educational documents)',
            'ru' => 'Апостиль (документы МИД)',
            'uk' => 'Апостиль (документи МЗС)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '30 work days',
                'ru' => '30 рабочих дней',
                'uk' => '30 робочих днів'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
			array(
              'title' => array(
                'en' => '20 work days',
                'ru' => '20 рабочих дней',
                'uk' => '20 робочих днів'
              ),
              'price' => 250,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),			
			array(
              'title' => array(
                'en' => '10 work days',
                'ru' => '10 рабочих дней',
                'uk' => '10 робочих днів'
              ),
              'price' => 350,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
			array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 500,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
        array(
          'title' => array(
            'en' => 'Consular legalization (MU, phys. personnel)',
            'ru' => 'Консульская легализация (МЮ, физ. лицо)',
            'uk' => 'Консульска легализація (МЮ, фіз. особа)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '1 work day',
                'ru' => '1 рабочий день',
                'uk' => '1 робочий день'
              ),
              'price' => 105,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),
		array(
          'title' => array(
            'en' => 'Consular legalization (MU, legal personnel)',
            'ru' => 'Консульская легализация (МЮ, юр. лицо)',
            'uk' => 'Консульска легализація (МЮ, юр. особа)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '1 work day',
                'ru' => '1 рабочий день',
                'uk' => '1 робочий день'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
		array(
          'title' => array(
            'en' => 'Consular legalization (Foreign phys. personnel)',
            'ru' => 'Консульская легализация (МИД, физ. лицо)',
            'uk' => 'Консульска легализація (МЗС, фіз. особа)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '5 work days',
                'ru' => '5 рабочих дней',
                'uk' => '5 робочих днів'
              ),
              'price' => 105,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
			array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 200,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),		
		array(
          'title' => array(
            'en' => 'Consular legalization (Foreign legal personnel)',
            'ru' => 'Консульская легализация (МИД, юр. лицо)',
            'uk' => 'Консульска легализація (МЗС, юр. особа)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '5 work days',
                'ru' => '5 рабочих дней',
                'uk' => '5 робочих днів'
              ),
              'price' => 305,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
			array(
              'title' => array(
                'en' => '2 work days',
                'ru' => '2 рабочих дня',
                'uk' => '2 робочих дні'
              ),
              'price' => 475,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),
		
		array(
          'title' => array(
            'en' => 'Consular legalization (in the embassy)',
            'ru' => 'Консульская легализация (в посольстве)',
            'uk' => 'Консульська легалізація (у посольстві)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => 'from 1 work day',
                'ru' => 'от 1 рабочего дня',
                'uk' => 'від 1 робочого дня'
              ),
              'price' => 100,
              'prefix' => array(
                'en' => '',
                'ru' => '',
                'uk' => ''
              ),
              'units' => array(
                'en' => 'UAH + consular fee',
                'ru' => 'грн + консул. сбор',
                'uk' => 'грн + консул. сбір'
              ),
            ),
          ),
        ),		
        array(
          'title' => array(
            'en' => 'Nostrification (foreign educational docs)',
            'ru' => 'Нострификация (иностр. образов. документы)',
            'uk' => 'Нострификация (інозем. освітні документи)'
          ),
          'value' => array(
            array(
              'title' => array(
                'en' => '50 work days',
                'ru' => '50 рабочих дней',
                'uk' => '50 робочих днів'
              ),
              'price' => 2000,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
            array(
              'title' => array(
                'en' => '20 work days',
                'ru' => '20 рабочих дней',
                'uk' => '20 робочих днів'
              ),
              'price' => 2500,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
			array(
              'title' => array(
                'en' => '5 work days',
                'ru' => '5 рабочих дней',
                'uk' => '5 робочих днів'
              ),
              'price' => 2850,
              'prefix' => array(
                'en' => 'from',
                'ru' => 'от',
                'uk' => 'від'
              ),
              'units' => array(
                'en' => 'UAH',
                'ru' => 'грн',
                'uk' => 'грн'
              ),
            ),
          ),
        ),
      ),
    ),
  );

  /*** Translation page translations ***/
  $languages['translation'] = array(
    'title' => array(
      'en' => 'Translations of any complexity',
      'ru' => 'Переводы любой сложности',
      'uk' => 'Переклади будь-якої складності'
    ),
    'text' => array(
      'en' => 'Our certified translators specialize in specific areas, so we guarantee the quality translation of any subject and complexity in time.',
      'ru' => 'Наши дипломированные переводчики специализируются в конкретных сферах деятельности, таким образом, мы гарантируем качественное выполнение перевода любой тематики и сложности точно в срок.',
      'uk' => 'Наші дипломовані перекладачі спеціалізуються в конкретних сферах діяльності, таким чином, ми гарантуємо якісне виконання перекладу будь-якої тематики та складності точно в строк.'
    ),
    'calculator' => array(
      'title' => array(
        'en' => 'Calculator',
        'ru' => 'Калькулятор',
        'uk' => 'Калькулятор'
      ),
      'text' => array(
        'en' => 'Find out your text translation cost',
        'ru' => 'Узнайте стоимость перевода именно вашего текста',
        'uk' => 'Дізнайтеся вартість перекладу саме вашого тексту'
      ),
      'number' => array(
        'en' => 'Number of pages (1 pages = 1860 symbols)',
        'ru' => 'Кол-во страниц (1 страница = 1860 символов)',
        'uk' => 'Кіл-ть сторінок (1 сторінка = 1860 символів)'
      ),
      'result' => array(
        'en' => 'Result',
        'ru' => 'Результат',
        'uk' => 'Результат'
      ),
      'units' => array(
        'en' => 'UAH',
        'ru' => 'грн',
        'uk' => 'грн'
      ),
      'modificators' => array(
        array(
          'title' => array(
            'en' => 'High Complexity',
            'ru' => 'Повышенная сложность',
            'uk' => 'Підвищена складність'
          ),
          'text' => array(
            'en' => 'Specific themes, high requirements for style, large number of narrow profile terminology, etc.',
            'ru' => 'Специфичная тематика, высокие требования к стилю, большое количество узкопрофильной терминологии и т.д.',
            'uk' => 'Специфічна тематика, високі вимоги до стилю, велика кількість вузькопрофільної термінології і т.д.'
          ),
          'value' => 0.2,
          'prefix' => array(
            'en' => 'from',
            'ru' => 'от',
            'uk' => 'від'
          ),
          'dependency' => array(
            'en' => '(Depending on the complexity)',
            'ru' => '(В зависимости от сложности)',
            'uk' => '(В залежності від складності)'
          )
        ),
        array(
          'title' => array(
            'en' => 'Work on weekends, holidays',
            'ru' => 'Работа в выходные, праздники',
            'uk' => 'Робота в вихідні, свята'
          ),
          'text' => '',
          'value' => 1,
          'prefix' => array(
            'en' => 'from',
            'ru' => 'от',
            'uk' => 'від'
          ),
          'dependency' => ''
        ),
        array(
          'title' => array(
            'en' => 'Urgent!',
            'ru' => 'Срочно!',
            'uk' => 'Терміново!'
          ),
          'text' => '',
          'value' => 0.5,
          'prefix' => array(
            'en' => 'from',
            'ru' => 'от',
            'uk' => 'від'
          ),
          'dependency' => array(
            'en' => '(Depending on the complexity)',
            'ru' => '(В зависимости от срочности)',
            'uk' => '(В залежності від терміновості)'
          )
        )
      ),
      'documents' => array(
        array(
          'title' => array(
            'en' => 'Plaintext',
            'ru' => 'Обычный текст',
            'uk' => 'Звичайний текст'
          ),
          'price' => 'text',
          'status' => 'checked'
        ),
        array(
          'title' => array(
            'en' => 'Translation by native speakerа',
            'ru' => 'Перевод носителем языка',
            'uk' => 'Переклад носієм мови'
          ),
          'price' => 'native',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate of identity (with a photo)',
            'ru' => 'Удостоверение личности (с фото)',
            'uk' => 'Посвідчення особи (з фото)'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Internal passport (of to of 3th turns)',
            'ru' => 'Внутренний паспорт (до 3-х разворотов)',
            'uk' => 'Внутрішній паспорт (до 3-х розворотів)'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'International passport (to 3 turns',
            'ru' => 'Загранпаспорт (до 3-х разворотов)',
            'uk' => 'Закордонний паспорт (до 3-х розворотів)'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Pension certification',
            'ru' => 'Пенсионное удостоверение',
            'uk' => 'Пенсійне посвідчення'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Student identification card',
            'ru' => 'Студенческий билет',
            'uk' => 'Студентський квиток'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Driving licence',
            'ru' => 'Водительские права',
            'uk' => 'Водійські права'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Permission into temporal place of inhabitation',
            'ru' => 'Разрешение на временное место жительства',
            'uk' => 'Дозвіл на тимчасове місце проживання'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Admission',
            'ru' => 'Пропуск',
            'uk' => 'Перепустка'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certification',
            'ru' => 'Удостоверение',
            'uk' => 'Посвідчення'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Document about civil status',
            'ru' => 'Документ о гражданском статусе',
            'uk' => 'Документ про громадянський статус'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Marriage line',
            'ru' => 'Свидетельство о браке',
            'uk' => 'Свідоцтво про шлюб'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Birth certificate',
            'ru' => 'Свидетельство о рождении',
            'uk' => 'Свідоцтво про народження'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to divorce',
            'ru' => 'Свидетельство о разводе',
            'uk' => 'Свідоцтво про розлучення'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to change of name/of last name',
            'ru' => 'Свидетельство об изменении имени/фамилии',
            'uk' => 'Свідоцтво про зміну імені/прізвища'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about absence of obstacles for celebration of marriage',
            'ru' => 'Справка об отсутствии препятствий для заключения брака',
            'uk' => 'Довідка про відсутність перешкод для укладення шлюбу'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to adoption',
            'ru' => 'Свидетельство об усыновлении',
            'uk' => 'Свідоцтво про усиновлення'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate establishment of guardianship',
            'ru' => 'Свидетельство установлении опеки',
            'uk' => 'Свідоцтво про встановлення опіки'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Death certificate',
            'ru' => 'Свидетельство о смерти',
            'uk' => 'Свідоцтво про смерть'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Document about education',
            'ru' => 'Документ об образовании',
            'uk' => 'Документ про освіту'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Diploma (Without appendix)',
            'ru' => 'Диплом (без приложения)',
            'uk' => 'Диплом (без додатка)'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'School certificate',
            'ru' => 'Школьный аттестат',
            'uk' => 'Шкільний атестат'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Diploma to school certificat',
            'ru' => 'Диплом к школьному аттестату',
            'uk' => 'Диплом до шкільного атестату'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Diploma of candidate of sciences',
            'ru' => 'Диплом кандидата наук',
            'uk' => 'Диплом кандидата наук'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Diploma of doctor of sciences',
            'ru' => 'Диплом доктора наук',
            'uk' => 'Диплом доктора наук'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate of professor',
            'ru' => 'Аттестат профессора',
            'uk' => 'Атестат профессора'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate of associate professor',
            'ru' => 'Аттестат доцента',
            'uk' => 'Атестат доцента'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'References from job, from financial institutions',
            'ru' => 'Справки с места работы, из финансовых учреждений',
            'uk' => 'Довідки з місця роботи, з фінансових установ'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Reference from job',
            'ru' => 'Справка с места работы',
            'uk' => 'Довідка з місця роботи'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Labour book',
            'ru' => 'Трудовая книжка',
            'uk' => 'Трудова книжка'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate from the place of studies',
            'ru' => 'Справка с места учебы',
            'uk' => 'Довідка з місця навчання'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about profits',
            'ru' => 'Справка о доходах',
            'uk' => 'Довідка про доходи'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about the presence of bank account',
            'ru' => 'Справка о наличии банковского счета',
            'uk' => 'Довідка про наявність банківського рахунку'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Extract about motion of facilities on an accou',
            'ru' => 'Выписка о движении средств на счете',
            'uk' => 'Виписка про рух коштів на рахунку'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Other certificates',
            'ru' => 'Другие справки',
            'uk' => 'Інші довідки'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Certificate about absence of previous conviction',
            'ru' => 'Справка об отсутствии судимости',
            'uk' => 'Довідка про відсутність судимості'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about the appropriation of Personal Code',
            'ru' => 'Справка о присвоении ИНН',
            'uk' => 'Довідка про привласнення ІНН'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about confirmation of registrationи',
            'ru' => 'Справка о подтверждении прописки',
            'uk' => 'Довідка про підтвердження прописки'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate about composition of family',
            'ru' => 'Справка о составе семьи',
            'uk' => "Довідка про склад сім'ї"
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Medical certificate general health (form of 082/о)',
            'ru' => 'Медицинская справка об общем состоянии здоровья (форма 082/о)',
            'uk' => "Медична довідка про загальний стан здоров'я (форма 082/о)"
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Documents on property',
            'ru' => 'Документы на имущество',
            'uk' => 'Документи на майно'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Testifying to the right of ownership',
            'ru' => 'Свидетельство о праве собственности',
            'uk' => 'Свідоцтво про право власності'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to the right on an inheritance',
            'ru' => 'Свидетельство о праве на наследство',
            'uk' => 'Свідоцтво про право на спадок'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Registration certification',
            'ru' => 'Регистрационное удостоверение',
            'uk' => 'Реєстраційне посвідчення'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'State act on lot land',
            'ru' => 'Государственный акт на земельный участок',
            'uk' => 'Державний акт на земельну ділянку'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Technical passprot on an accommodation',
            'ru' => 'Техпаспорт на жилье',
            'uk' => 'Техпаспорт на житло'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Documents from physical persons - businessmen and legal entities',
            'ru' => 'Документы от физических лиц - предпринимателей и юридических лиц',
            'uk' => 'Документи від фізичних осіб - підприємців і юридичних осіб'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Testifying to state registration legal or physical persons',
            'ru' => 'Свидетельство о государственной регистрации юридического или физического лица',
            'uk' => 'Свідоцтво про державну реєстрацію юридичної або фізичної особи'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate of taxpayer of legal or physical entity',
            'ru' => 'Свидетельство налогоплательщика юридического или физического лица',
            'uk' => 'Свідоцтво платника податків юридичної або фізичної особи'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to confirmation of legal address of company',
            'ru' => 'Свидетельство о подтверждении юридического адреса компании',
            'uk' => 'Свідоцтво про підтвердження юридичної адреси компанії'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to setting of directors',
            'ru' => 'Свидетельство о назначении директоров',
            'uk' => 'Свідоцтво про призначення директорів'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Testifying to membership of shareholders',
            'ru' => 'Свидетельство о составе акционеров',
            'uk' => 'Свідоцтво про склад акціонерів'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Licenses, certificates, negotiable instruments',
            'ru' => 'Лицензии, сертификаты, коммерческие документы',
            'uk' => 'Ліцензії, сертифікати, комерційні документи'
          ),
          'price' => '',
          'status' => 'disabled'
        ),
        array(
          'title' => array(
            'en' => 'Certificate of accordance',
            'ru' => 'Сертификат соответствия',
            'uk' => 'Сертифікат відповідності'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate of origin of commodity',
            'ru' => 'Сертификат происхождения товара',
            'uk' => 'Сертифікат походження товару'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Certificate on the system of management of quality',
            'ru' => 'Сертификат на систему менеджмента качества',
            'uk' => 'Сертифікат на систему менеджменту якості'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Accounts and receipts',
            'ru' => 'Счета и квитанции',
            'uk' => 'Рахунки та квитанції'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Packing folias',
            'ru' => 'Упаковочные листы',
            'uk' => 'Пакувальні листи'
          ),
          'price' => 'documents',
          'status' => ''
        ),
        array(
          'title' => array(
            'en' => 'Accompanying documents and other.',
            'ru' => 'Сопроводительные документы и др.',
            'uk' => 'Супровідні документи та ін.'
          ),
          'price' => 'documents',
          'status' => ''
        )
      ),
      'prices' => array(
        'text' => array(
          array(
            'title' => array(
              'en' => 'Ukrainian',
              'ru' => 'Украинский',
              'uk' => 'Українська'
            ),
            'price' => array(
              'retail' => 40,
              'wholesale' => 35,
            )
          ),
          array(
            'title' => array(
              'en' => 'Russian',
              'ru' => 'Русский',
              'uk' => 'Російська'
            ),
            'price' => array(
              'retail' => 40,
              'wholesale' => 35,
            )
          ),
          array(
            'title' => array(
              'en' => 'English',
              'ru' => 'Английский',
              'uk' => 'Англійська'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 75,
            )
          ),
          array(
            'title' => array(
              'en' => 'French',
              'ru' => 'Французский',
              'uk' => 'Французька'
            ),
            'price' => array(
              'retail' => 85,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'German',
              'ru' => 'Немецкий',
              'uk' => 'Німецька'
            ),
            'price' => array(
              'retail' => 85,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Italian',
              'ru' => 'Итальянский',
              'uk' => 'Італійська'
            ),
            'price' => array(
              'retail' => 110,
              'wholesale' => 105,
            )
          ),
          array(
            'title' => array(
              'en' => 'Spanishй',
              'ru' => 'Испанский',
              'uk' => 'Іспанська'
            ),
            'price' => array(
              'retail' => 110,
              'wholesale' => 105,
            )
          ),
          array(
            'title' => array(
              'en' => 'Greek',
              'ru' => 'Греческий',
              'uk' => 'Грецька'
            ),
            'price' => array(
              'retail' => 145,
              'wholesale' => 140,
            )
          ),
          array(
            'title' => array(
              'en' => 'Serbian',
              'ru' => 'Сербский',
              'uk' => 'Сербська'
            ),
            'price' => array(
              'retail' => 145,
              'wholesale' => 140,
            )
          ),
          array(
            'title' => array(
              'en' => 'Serbo-Croatian',
              'ru' => 'Сербскохорватский',
              'uk' => 'Сербськохорватська'
            ),
            'price' => array(
              'retail' => 145,
              'wholesale' => 140,
            )
          ),
          array(
            'title' => array(
              'en' => 'Croatian',
              'ru' => 'Хорватский',
              'uk' => 'Хорватська'
            ),
            'price' => array(
              'retail' => 145,
              'wholesale' => 140,
            )
          ),
          array(
            'title' => array(
              'en' => 'Czech',
              'ru' => 'Чешский',
              'uk' => 'Чеська'
            ),
            'price' => array(
              'retail' => 145,
              'wholesale' => 140,
            )
          ),
          array(
            'title' => array(
              'en' => 'Lithuanian',
              'ru' => 'Литовский',
              'uk' => 'Литовська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Moldavian',
              'ru' => 'Молдавский',
              'uk' => 'Молдавська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Romanian',
              'ru' => 'Румынский',
              'uk' => 'Румунська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Polish',
              'ru' => 'Польский',
              'uk' => 'Польська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Portuguese',
              'ru' => 'Португальский',
              'uk' => 'Португальська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Slovakia',
              'ru' => 'Словацкий',
              'uk' => 'Словацька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Slovenian',
              'ru' => 'Словенский',
              'uk' => 'Словенська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Turkish',
              'ru' => 'Турецкий',
              'uk' => 'Турецька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 165,
            )
          ),
          array(
            'title' => array(
              'en' => 'Armenian',
              'ru' => 'Армянский',
              'uk' => 'Вірменська'
            ),
            'price' => array(
              'retail' => 195,
              'wholesale' => 185,
            )
          ),
          array(
            'title' => array(
              'en' => 'Georgian',
              'ru' => 'Грузинский',
              'uk' => 'Грузинська'
            ),
            'price' => array(
              'retail' => 195,
              'wholesale' => 185,
            )
          ),
          array(
            'title' => array(
              'en' => 'Azerbaijania',
              'ru' => 'Азербайджанский',
              'uk' => 'Азербайджанська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Arabic',
              'ru' => 'Арабский',
              'uk' => 'Арабська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Belarussian',
              'ru' => 'Беларусский',
              'uk' => 'Білоруська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Danish',
              'ru' => 'Датский',
              'uk' => 'Датська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Hebrew',
              'ru' => 'Иврит',
              'uk' => 'Іврит'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Chinese',
              'ru' => 'Китайский',
              'uk' => 'Китайська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Korean',
              'ru' => 'Корейский',
              'uk' => 'Корейська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Latvian',
              'ru' => 'Латвийский',
              'uk' => 'Латвійська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Netherlands (Голландский)',
              'ru' => 'Нидерландский (Голландский)',
              'uk' => 'Нідерландська (Голландська)'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Persian',
              'ru' => 'Персидский (фарси)',
              'uk' => 'Перська (фарсі)'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Hungarian',
              'ru' => 'Венгерский',
              'uk' => 'Угорська'
            ),
            'price' => array(
              'retail' => 265,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Bulgarian',
              'ru' => 'Болгарский',
              'uk' => 'Болгарська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Kazakh',
              'ru' => 'Казахский',
              'uk' => 'Казахська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Kirghiz',
              'ru' => 'Киргизский',
              'uk' => 'Киргизька'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Norwegian',
              'ru' => 'Норвежский',
              'uk' => 'Норвезька'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Tadjik',
              'ru' => 'Таджикский',
              'uk' => 'Таджицька'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Tatar',
              'ru' => 'Татарский',
              'uk' => 'Татарська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Uzbek',
              'ru' => 'Узбекский',
              'uk' => 'Узбецька'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Finnish',
              'ru' => 'Финский',
              'uk' => 'Фінська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Swedish',
              'ru' => 'Шведский',
              'uk' => 'Шведська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Estonian',
              'ru' => 'Эстонский',
              'uk' => 'Естонська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Japanese',
              'ru' => 'Японский',
              'uk' => 'Японська'
            ),
            'price' => array(
              'retail' => 300,
              'wholesale' => 275,
            )
          ),
          array(
            'title' => array(
              'en' => 'Vietnamese',
              'ru' => 'Вьетнамский',
              'uk' => 'В`єтнамська'
            ),
            'price' => array(
              'retail' => 340,
              'wholesale' => 300,
            )
          ),
          array(
            'title' => array(
              'en' => 'Catalan',
              'ru' => 'Каталонский',
              'uk' => 'Каталонська'
            ),
            'price' => array(
              'retail' => 340,
              'wholesale' => 300,
            )
          ),
          array(
            'title' => array(
              'en' => 'Macedonian',
              'ru' => 'Македонский',
              'uk' => 'Македонська'
            ),
            'price' => array(
              'retail' => 340,
              'wholesale' => 300,
            )
          ),
          array(
            'title' => array(
              'en' => 'Indonesian',
              'ru' => 'Индонезийский',
              'uk' => 'Індонезійська'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 860,
            )
          ),
          array(
            'title' => array(
              'en' => 'Malay',
              'ru' => 'Малайский',
              'uk' => 'Малайська'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 860,
            )
          ),
          array(
            'title' => array(
              'en' => 'Thai',
              'ru' => 'Тайский',
              'uk' => 'Тайська'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 860,
            )
          ),
          array(
            'title' => array(
              'en' => 'Pushtu',
              'ru' => 'Пушту',
              'uk' => 'Пушту'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 860,
            )
          ),
          array(
            'title' => array(
              'en' => 'Urdu',
              'ru' => 'Урду',
              'uk' => 'Урду'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 860,
            )
          ),
        ),
        'native' => array(
          array(
            'title' => array(
              'en' => 'English',
              'ru' => 'Английский',
              'uk' => 'Английська'
            ),
            'price' => array(
              'retail' => 920,
              'wholesale' => 920,
            )
          ),
          array(
            'title' => array(
              'en' => 'French',
              'ru' => 'Французский',
              'uk' => 'Французька'
            ),
            'price' => array(
              'retail' => 1035,
              'wholesale' => 1035,
            )
          ),
          array(
            'title' => array(
              'en' => 'German',
              'ru' => 'Немецкий',
              'uk' => 'Німецька'
            ),
            'price' => array(
              'retail' => 1035,
              'wholesale' => 1035,
            )
          ),
          array(
            'title' => array(
              'en' => 'Italian',
              'ru' => 'Итальянский',
              'uk' => 'Італійська'
            ),
            'price' => array(
              'retail' => 1150,
              'wholesale' => 1150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Spanish',
              'ru' => 'Испанский',
              'uk' => 'Іспанська'
            ),
            'price' => array(
              'retail' => 1150,
              'wholesale' => 1150,
            )
          ),
        ),
        'documents' => array(
          array(
            'title' => array(
              'en' => 'Ukrainian',
              'ru' => 'Украинский',
              'uk' => 'Українська'
            ),
            'price' => array(
              'retail' => 30,
              'wholesale' => 30,
            )
          ),
          array(
            'title' => array(
              'en' => 'Russian',
              'ru' => 'Русский',
              'uk' => 'Російська'
            ),
            'price' => array(
              'retail' => 30,
              'wholesale' => 30,
            )
          ),
          array(
            'title' => array(
              'en' => 'English',
              'ru' => 'Английский',
              'uk' => 'Английська'
            ),
            'price' => array(
              'retail' => 50,
              'wholesale' => 50,
            )
          ),
          array(
            'title' => array(
              'en' => 'French',
              'ru' => 'Французский',
              'uk' => 'Французька'
            ),
            'price' => array(
              'retail' => 55,
              'wholesale' => 55,
            )
          ),
          array(
            'title' => array(
              'en' => 'German',
              'ru' => 'Немецкий',
              'uk' => 'Німецька'
            ),
            'price' => array(
              'retail' => 55,
              'wholesale' => 55,
            )
          ),
          array(
            'title' => array(
              'en' => 'Italian',
              'ru' => 'Итальянский',
              'uk' => 'Італійська'
            ),
            'price' => array(
              'retail' => 60,
              'wholesale' => 60,
            )
          ),
          array(
            'title' => array(
              'en' => 'Spanish',
              'ru' => 'Испанский',
              'uk' => 'Іспанська'
            ),
            'price' => array(
              'retail' => 60,
              'wholesale' => 60,
            )
          ),
          array(
            'title' => array(
              'en' => 'Greek',
              'ru' => 'Греческий',
              'uk' => 'Грецька'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Serbian',
              'ru' => 'Сербский',
              'uk' => 'Сербська'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Serbo-Croatian',
              'ru' => 'Сербскохорватский',
              'uk' => 'Сербськохорватська'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Croatian',
              'ru' => 'Хорватский',
              'uk' => 'Хорватська'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Czech',
              'ru' => 'Чешский',
              'uk' => 'Чеська'
            ),
            'price' => array(
              'retail' => 80,
              'wholesale' => 80,
            )
          ),
          array(
            'title' => array(
              'en' => 'Lithuanian',
              'ru' => 'Литовский',
              'uk' => 'Литовська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Moldavian',
              'ru' => 'Молдавский',
              'uk' => 'Молдавська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Romanian',
              'ru' => 'Румынский',
              'uk' => 'Румунська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Polish',
              'ru' => 'Польский',
              'uk' => 'Польська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Portuguese',
              'ru' => 'Португальский',
              'uk' => 'Португальська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Slovakiaй',
              'ru' => 'Словацкий',
              'uk' => 'Словацька'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Slovenian',
              'ru' => 'Словенский',
              'uk' => 'Словенська'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Turkish',
              'ru' => 'Турецкий',
              'uk' => 'Турецька'
            ),
            'price' => array(
              'retail' => 90,
              'wholesale' => 90,
            )
          ),
          array(
            'title' => array(
              'en' => 'Armenian',
              'ru' => 'Армянский',
              'uk' => 'Вірменська'
            ),
            'price' => array(
              'retail' => 110,
              'wholesale' => 110,
            )
          ),
          array(
            'title' => array(
              'en' => 'Georgian',
              'ru' => 'Грузинский',
              'uk' => 'Грузинська'
            ),
            'price' => array(
              'retail' => 110,
              'wholesale' => 110,
            )
          ),
          array(
            'title' => array(
              'en' => 'Azerbaijanian',
              'ru' => 'Азербайджанский',
              'uk' => 'Азербайджанська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Arabic',
              'ru' => 'Арабский',
              'uk' => 'Арабська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Belarussian',
              'ru' => 'Беларусский',
              'uk' => 'Білоруська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Danish',
              'ru' => 'Датский',
              'uk' => 'Датська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Hebrew',
              'ru' => 'Иврит',
              'uk' => 'Іврит'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Chinese',
              'ru' => 'Китайский',
              'uk' => 'Китайська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Korean',
              'ru' => 'Корейский',
              'uk' => 'Корейська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Latvian',
              'ru' => 'Латвийский',
              'uk' => 'Латвийська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Netherlands (Dutch)',
              'ru' => 'Нидерландский (Голландский)',
              'uk' => 'Нідерландська (Голландська)'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Persian (farsi)',
              'ru' => 'Персидский (фарси)',
              'uk' => 'Перська (фарсі)'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Hungarian',
              'ru' => 'Венгерский',
              'uk' => 'Угорська'
            ),
            'price' => array(
              'retail' => 150,
              'wholesale' => 150,
            )
          ),
          array(
            'title' => array(
              'en' => 'Bulgarian',
              'ru' => 'Болгарский',
              'uk' => 'Болгарська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Kazakh',
              'ru' => 'Казахский',
              'uk' => 'Казахська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Kirghiz',
              'ru' => 'Киргизский',
              'uk' => 'Киргизька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Norwegian',
              'ru' => 'Норвежский',
              'uk' => 'Норвезька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Tadjik',
              'ru' => 'Таджикский',
              'uk' => 'Таджицька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Tatar',
              'ru' => 'Татарский',
              'uk' => 'Татарська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Uzbek',
              'ru' => 'Узбекский',
              'uk' => 'Узбецька'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Finnish',
              'ru' => 'Финский',
              'uk' => 'Фінська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Swedish',
              'ru' => 'Шведский',
              'uk' => 'Шведська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Estonian',
              'ru' => 'Эстонский',
              'uk' => 'Естонська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Japanese',
              'ru' => 'Японский',
              'uk' => 'Японська'
            ),
            'price' => array(
              'retail' => 170,
              'wholesale' => 170,
            )
          ),
          array(
            'title' => array(
              'en' => 'Vietnamese',
              'ru' => 'Вьетнамский',
              'uk' => 'В`єтнамська'
            ),
            'price' => array(
              'retail' => 190,
              'wholesale' => 190,
            )
          ),
          array(
            'title' => array(
              'en' => 'Catalan',
              'ru' => 'Каталонский',
              'uk' => 'Каталонська'
            ),
            'price' => array(
              'retail' => 190,
              'wholesale' => 190,
            )
          ),
          array(
            'title' => array(
              'en' => 'Macedonian',
              'ru' => 'Македонский',
              'uk' => 'Македонська'
            ),
            'price' => array(
              'retail' => 190,
              'wholesale' => 190,
            )
          ),
          array(
            'title' => array(
              'en' => 'Indonesian',
              'ru' => 'Индонезийский',
              'uk' => 'Індонезійська'
            ),
            'price' => array(
              'retail' => 250,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Malay',
              'ru' => 'Малайский',
              'uk' => 'Малайська'
            ),
            'price' => array(
              'retail' => 250,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Thai',
              'ru' => 'Тайский',
              'uk' => 'Тайська'
            ),
            'price' => array(
              'retail' => 250,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Pushtu',
              'ru' => 'Пушту',
              'uk' => 'Пушту'
            ),
            'price' => array(
              'retail' => 250,
              'wholesale' => 250,
            )
          ),
          array(
            'title' => array(
              'en' => 'Urdu',
              'ru' => 'Урду',
              'uk' => 'Урду'
            ),
            'price' => array(
              'retail' => 250,
              'wholesale' => 250,
            )
          )
        )
      )
    )
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
        'rate' => 5,
        'text' => array(
          'en' => 'The Best Company!',
          'ru' => 'Лучшая компания!',
          'uk' => 'Найкраща компанія!'
        ),
      ),
    ),
    'review' => array(
      'title' => array(
        'en' => 'Leave Reply',
        'ru' => 'Оставить отзыв',
        'uk' => 'Залишити відгук'
      ),
      'text' => array(
        'en' => 'We will be greateful for your comment',
        'ru' => 'Будем благодарны за Ваш комментарий',
        'uk' => 'Будемо вдячні за ваші коментарі'
      ),
      'name' => array(
        'en' => 'Your Name',
        'ru' => 'Ваше имя',
        'uk' => 'Ваше ім`я'
      ),
      'rate' => array(
        'en' => 'Quality Rating',
        'ru' => 'Оценка качества услуг',
        'uk' => 'Оцінка якості послуг'
      ),
      'message' => array(
        'en' => 'Your Message',
        'ru' => 'Ваше сообщение',
        'uk' => 'Ваше повідомлення'
      ),
    )
  );

  /*** Contacts page translations ***/
  $languages['contacts'] = array(
    'title' => array(
      'en' => 'Contacts',
      'ru' => 'Контакты',
      'uk' => 'Контакти'
      ),
    'text' => array(
      'en' => '',
      'ru' => '',
      'uk' => ''
    ),
    'phones' => array(
      '+38 (044) 581 48 41'
    ),
    'emails' => array(
      'info@hbma-int.com'
    ),
    'address' => array(
      'en' => 'Kiev, Zdolbunovskaia, 3a, of. 4',
      'ru' => 'Киев, Здолбуновская, 3а, оф. 4',
      'uk' => 'Киев, Здолбунівська, 3а, оф. 4'
    ),
    'map' => '',
    'form' => array(
      'title' => array(
        'en' => 'Contacts us',
        'ru' => 'Напишите нам',
        'uk' => 'Напишіть нам'
      ),
      'text' => array(
        'en' => "Leave a message and we'll contact you",
        'ru' => 'Оставьте заявку и мы свяжемся с Вами',
        'uk' => "Залиште заявку і ми зв'яжемося з Вами"
      ),
      'email' => array(
        'en' => 'Your E-mail',
        'ru' => 'Ваш E-mail',
        'uk' => 'Ваш E-mail'
      ),
      'subject' => array(
        'en' => 'Subject',
        'ru' => 'Тема',
        'uk' => 'Тема'
      ),
      'message' => array(
        'en' => 'Your Message',
        'ru' => 'Ваше сообщение',
        'uk' => 'Ваше повідомлення'
      )
    )
  );
  
  /*** 404 page translations ***/
  $languages['404'] = array(
    'heading' => '404',
    'text' => array(
      'en' => 'This page is not found.<br>You can select one of the menu items.',
      'ru' => 'Такая страница не найдена.<br>Вы можете выбрать один из пунктов меню.',
      'uk' => 'Така сторінка не знайдена.<br>Ви можете вибрати один з пунктів меню.'
    )
  );
?>