$(document).ready(function () {
  $(".dropdown-button").dropdown()
  $(".button-collapse").sideNav()
  $('select').material_select()
  $('.parallax').parallax()
  $('.materialboxed').materialbox()
  $('#comment').keypress(function (key) {
    if (key.keyCode === 13) {
      var comment = $(this).val();

      if (comment.trim() == '') {
        return;
      }

      var data = {
        comment: comment,
        _token: $('#_token').val(),
        project_id: $(this).attr('data-id')
      }

      $(this).val('')

      $.post('/projects/comment', data, function (res) {
        var html = ''
        html += '<div class="collapsible-body">'
        html += '<span class="right">' + res.comment.time + '</span>'
        html += '<span class="flow-text">'
        html += '<a href="/profile/' + res.user.id + '">' + res.user.name + '</a></span>'
        html += '<p>' + res.comment.comment + '</p>'
        html += '</div>'

        var h = $('#comments').html();
        h += html;
        $('.collapsible-body').toggle();
        $('#comments').html(h);
        $('.collapsible-body').toggle();
        var comments = $('#commentCount').html()
        var comments = Number(comments) + 1
        $('#commentCount').html(comments)
      })
    }
  })

  $('#favorite').click(function (e) {
    e.preventDefault()
    var data = {
      project_id: $('#comment').attr('data-id'),
      _token: $('#_token').val()
    }

    var state = $('#favorite').attr('class')
    var url = state == 'unfav' ? 'favorite' : 'unfavorite'

    $.post('/projects/' + url, data, function (res) {
        $('#favoriteCount').html(res);

        if (state == 'fav')
            $('#favorite').removeClass('fav').addClass('unfav')
        else
            $('#favorite').removeClass('unfav').addClass('fav')
    })
  })

  $('#changeProfPic').click(function() {
    $('#image').click();
  });

  $('#image').change(function() {
    $('#profileImageForm').submit();
  });

  $('.card').click(function() {
    var id = $(this).attr('data-id')
    window.location = '/projects/' + id;
  })
})
