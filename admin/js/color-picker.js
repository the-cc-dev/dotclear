/*global $, jQuery */
'use strict';

$(function() {
  $('.colorpicker').colorPicker();
});

jQuery.fn.colorPicker = function() {
  $(this).each(function() {
    var colbox, f;
    colbox = $('#jquery-colorpicker')[0];

    if (colbox == undefined) {
      colbox = document.createElement('div');
      colbox.id = 'jquery-colorpicker';
      colbox.linkedto = null;

      $(colbox).addClass('color-color-picker');
      $(colbox).css({
        display: 'none',
        position: 'absolute'
      });
      $('body').append(colbox);
    }
    f = $.farbtastic(colbox);
    f.linkTo(this);

    var handler = $(document.createElement('img'));
    handler.attr('src', 'images/picker.png');
    handler.attr('alt', '');

    var span = $(document.createElement('span'));

    if ($(this).css('position') == 'absolute') {
      span.css('position', 'absolute');
      span.css('top', $(this).css('top'));
      span.css('left', $(this).css('left'));
      $(this).css('position', 'static');
    } else {
      span.css('position', 'relative');
    }
    span.css('display', 'inline-block');
    span.css('padding', '0 5px 0 0');
    $(this).wrap(span);
    $(this).after(handler);

    handler.css({
      position: 'absolute',
      top: 3,
    });

    handler.css({
      cursor: 'default'
    });

    var This = this;
    handler.click(function() {
      if ($(colbox).css('display') == 'none' || this != colbox.linkedto) {
        f.linkTo(This);
        This.focus();
        var offset = $(This).offset();
        $(colbox).css({
          zIndex: 1000,
          top: offset.top + $(this).height() + 5,
          left: offset.left
        });
        if (document.all) {
          $('select').hide();
        }
        $(colbox).show();
        colbox.linkedto = this;

      } else {
        $(colbox).hide();
        if (document.all) {
          $('select').show();
        }
        colbox.linkedto = null;
      }
    });
    $(this).blur(function() {
      $(colbox).hide();
      if (document.all) {
        $('select').show();
      }
    });
  });
  return this;
};
