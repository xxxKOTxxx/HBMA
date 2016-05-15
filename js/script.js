$(document).ready(function() {
  /*** Mobile-menu ***/
  var body = $('body');
  var mobile = $('.mobile');
  var mobile_menu = mobile.find('.menu');
  var mobile_close = mobile.find('.close');

  var openMenu = function() {
    body.addClass('show');
  };
  var closeMenu = function() {
    body.removeClass('show');
  };

  mobile_menu
    .on('click', function(event) {
      openMenu();
    });
  mobile_close
    .on('click', function(event) {
      closeMenu();
    });

  /*** AJAX-reload ***/
  var shadow_fade_time = 200
  var shadow_delay_time = 500
  var menuItems = $('.menu-item');
  var container = $('.container');
  var shadow = $('.shadow');
  var shadow_block_timestamp = 0;

  var setShadow = function(switcher, state) {
    var current_time = $.now();
    var time_left = shadow_block_timestamp - current_time;
    if(time_left > 0) {
      setTimeout(function() {
        setShadow(switcher, state)
      }, time_left)
    }
    else {
      if(switcher) {
        shadow.css({'display': 'block'}).fadeTo(shadow_fade_time, 1, function() {
          window.scrollTo(0,0);
          setPage(state);
        });
      }
      else {
        shadow.fadeTo(shadow_fade_time, 0, function() {
          shadow.css({'display': 'none'});
          closeMenu();
        });
      }
      shadow_block_timestamp = current_time + shadow_delay_time
    }
  }

  var getState = function(target, set) {
    var url = target.attr('href') || target.parent().attr('href');
    if(url == '.') {
      url = '';
    }
    var current_url = window.location.pathname.replace('/', '');
    if(current_url == url) {
      return false;
    }
    var page = '/main';
    if(url != '') {
      page = '/'+url;
    };
    var path = window.location.pathname.split('/');
    path[path.length-1] = url;
    url = path.join('/');
    var title = target.attr('title') || target.parent().attr('title');
    if(title.substring(0,4) != 'HBMA') {
      title = 'HBMA - '+title
    }
    return {
      set: set,
      url: url,
      page: page,
      title: title
    };
  }

  var setPage = function(state) {
    $.ajax({
      type: 'POST',
      url: 'pages'+state.page+'.php',
      success: function(data) {
        container.html(data);
        $('a[href="'+state.url.split('/').pop()+'"]').parent().addClass('current');
        setSlider();
        if(state.set) {
          if(history && history.pushState) {
            history.pushState(state, state.title, state.url);
          }
        }
        document.title = state.title;
        prettify();
        setShadow(false);
      }
    });
  };

  $(document)
    .on('click', 'a.page-link', function(event) {
      event.preventDefault();
      menuItems.removeClass('current');
      var state = getState($(event.target), true);
      if(!state) {
        return false;
      }
      setShadow(true, state);
    });

  $(window)
    .on('popstate', function () {
      if(history && history.state) {
        var state = history.state
        state.set = false;
        setPage(state);
      }
    })
    .on('load', function() {
      if(history) {
        var url = window.location.pathname;
        var page = '/main';
        if(url != '/') {
          page = url;
        };
        var state = {
          set: false,
          url: url,
          page: page,
          title: document.title
        };
        history.replaceState(state, state.title, state.url);
      }
    });

  /*** Languages ***/
  var languageLink = $('a.language');

  var getLanguageItem = function(data, path) {
    if(!path) {
      return;
    }
    var result = data;
    var path_array = path.split('-');
    for (var i = 0; i <= path_array.length - 1; i++) {
      result = result[path_array[i]];
      if(typeof result == 'undefined') {
        console.log('Translation error: '+path+' not found!')
        return false;
      }
    }
    return result;
  }

  var setLanguage = function(json) {
    var data = JSON.parse(json);
    var languageNodes = $('[data-language]');
    $.each(languageNodes, function() {
      var path = $(this).data('language');
      var language_data = getLanguageItem(data, path);
      if(!language_data) {
        return;
      }
      switch($(this).prop('nodeName')) {
        case 'INPUT':
        case 'TEXTAREA':
          $(this).prop('placeholder', language_data);
        case 'A':
          $(this).prop('title', language_data.title);
          break;
          break;
        case 'OPTION':
          $(this).prop('value', JSON.stringify(language_data.value));
          break;
        default:
          $(this).html(language_data);
      };
    });
  };

  var getLanguageData = function(target) {
    var language = target.data('set-language');
    var page = history.state.page.trim('/');
    $.ajax({
      type: 'POST',
      url: 'php/language.php',
      data: 'type=ajax&language='+language+'&page='+page,
      success: function(json) {
        expires = new Date($.now()+31556926000).toGMTString();
        document.cookie = 'language='+language+';expires='+expires+';path=/';
        setLanguage(json);
        languageLink.removeClass('current');
        target.addClass('current');
        closeMenu();
      }
    });
  };

  languageLink
    .on('click', function(event) {
      event.preventDefault();
      getLanguageData($(event.target));
    });

  /*** Slider ***/
  var bx_slider_options = {
    main: {
      mode: 'fade',
      speed: 500,
      pause: 5000,
      autoDelay: 3000,
      auto: true,
      autoHover: true,
      randomStart: false,
      infiniteLoop: true,
      adaptiveHeight: false,
      controls: false,
      pagerCustom: '#bx-pager',
      slideSelector: '.slide',
      onSliderLoad: function(){
        $('.slider-runner').width(100 / $('.slider-controll').length + '%');
      },
      onSlideBefore: function($slideElement, oldIndex, newIndex) {
        $('.slider-runner').css('left', newIndex * $('.slider-controll').outerWidth() + 'px');
      }
    },
    reviews: {
      pager: false,
      speed: 500,
      pause: 5000,
      autoDelay: 3000,
      auto: true,
      autoHover: true,
      randomStart: true,
      infiniteLoop: true,
      adaptiveHeight: false,
      slideSelector: '.slide',
      nextText: 'nextText',
      nextSelector: '.arrow-right',
      prevText: 'prevText',
      prevSelector: '.arrow-left'
    }
  };

  var setSlider = function() {
    var slider = $('.slider');
    if(slider.length) {
      $.each(slider, function() {
        var slider_type = slider.data('slider');
        slider.bxSlider(bx_slider_options[slider_type]);
      });
    }
  }

  setSlider();

  /*** Calculator ***/
  var wholesale_count = 100;
  var calculator_fade_time = 200;

  var prettify = function() {
    $('form.calculator').mfs(
      {
        'enableScroll' : true,
        'maxHeight'    : 200
      }
    );

    var number_inputs = $("input[type=number]");
    if(number_inputs.length) {
      number_inputs.each(function(index, element) {
        $(element).stepper();
      });
    };
  };

  var setSelects = function (argument) {
    $('form').mfs('refresh');
  };

  var setAffect = function(object) {
    var target_class = object.data('affect') || object.parent().data('affect');
    var target = $('.'+target_class);
    var data = object.val();
    var json = $.parseJSON(data, true);
    var html = ''
    $.each(json, function(index, element) {
      html += '<option value="" ';
      if(element.hasOwnProperty('prefix')) {
        html += 'data-prefix="'+element.prefix+'" ';
      }
      if(element.hasOwnProperty('price')) {
        if(typeof(element.price) == 'object') {
          
          html += "data-price='"+JSON.stringify(element.price)+"' ";
        }
        else {
          html += 'data-price="'+element.price+'" ';
        }
      }
      if(element.hasOwnProperty('units')) {
        html += 'data-units="'+element.units+'" ';
      }
      html += '>'+element.title+'</option>';
    });
    target.html(html);
    setSelects();
  };

  var getCalculatorCount = function(calculator) {
    var target = calculator.find('.calculator-count');
    if(!target.length) {
      return {"price": 1, "type": false};
    }
    var value = target.val() || 0;
    var type = 'retail';
    if(value > wholesale_count) {
      type = 'wholesale';
    }
    return {"price": value, "type": type};
  };

  var getCalculatorModificator = function(calculator) {
    var modificators = calculator.find('input:checkbox:checked').map(function() {
      return parseFloat(this.value);
    }).get();
    var result = modificators.reduce(function(result, current) {
      return result + current;
    }, 1);
    return result;
  };

  var getCalculatorPrice = function(calculator, type) {
    var target = calculator.find('[data-price]');
    if(target.prop("tagName") == 'OPTION') {
      var price = target.parent().find(":selected").data('price');
    }
    else {
      var price = target.data('price');
    }
    if(type) {
      price = price[type];
    }
    return price;
  };
  var getCalculatorPrefix = function(calculator) {
    var prefix = false;
    var targets = calculator.find('[data-prefix]');
    var targets_length = targets.length;
    if(!targets_length) {
      return prefix;
    }
    if(targets_length > 1) {
      if(targets.eq(0).prop("tagName") == 'OPTION') {
        var prefix = targets.eq(0).parent().find(":selected").data('prefix');
      }
      if(targets.eq(0).prop("tagName") == 'INPUT') {
        targets.each(function(index, element) {
          if(this.checked) {
            prefix = $(this).data('prefix');
            return false;
          }
        });
      }
    }
    else {
      prefix = targets.data('prefix');
    }
    return prefix;
    
  };
  var getCalculatorUnits = function(calculator) {
    var target = calculator.find('[data-units]');
    var units = target.data('units') || false;
    return units;
  };

  var setCalculator = function(calculator, data) {
    var calculator_result = calculator.find('.calculator-result-block');
    var calculator_prefix = calculator.find('.result-prefix');
    var calculator_value = calculator.find('.result-value');
    var calculator_units = calculator.find('.result-units');

    var prefix = data.prefix || '';
    var value = data.value || '';
    var units = data.units || '';

    calculator_result
      .fadeTo(calculator_fade_time, 0, function() {
        calculator_prefix.text(prefix);
        calculator_value.text(value);
        calculator_units.text(units);
        if(value != '' || units != '' || prefix !== '') {
          calculator_result.fadeTo(calculator_fade_time, 1);
        }
      });
  };

  var calculate = function(event) {
    var target = $(this);
    var target_value = target.val();

    var calculator = target.closest('.calculator');

    if(target[0].hasAttribute('data-affect') || target.parent()[0].hasAttribute('data-affect')) {
      setAffect(target);
    }

    var countData = getCalculatorCount(calculator);
    var count = countData.price;
    var type = countData.type;
    var price = getCalculatorPrice(calculator, type);
    var modificator = getCalculatorModificator(calculator);
    if(typeof price == 'string') {
      var value = price;
      var prefix = false;
      var units = false;
    }
    else {
      if(!count) {
        var value = false;
        var prefix = false;
        var units = false;
      }
      else {
        var value = parseInt(price * count * modificator);
        var prefix = getCalculatorPrefix(calculator);
        var units = getCalculatorUnits(calculator);
      };
    };
    var data = {
      "prefix": prefix,
      "value": value,
      "units": units
    };
    setCalculator(calculator, data); 

    console.log('count', count);
    console.log('modificator', modificator);
    console.log('price', price);
    console.log('value', value);
    console.log('prefix', prefix);
    console.log('units', units);
  }

  $(document.body).on('change', '.calculator-item', calculate);
  prettify();
});