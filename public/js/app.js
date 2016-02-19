$(document).ready(function () {
  $('select').material_select()
  $('.parallax').parallax()
  $('.materialboxed').materialbox()
  $('#comment').keypress(function (key) {
    if (key.keyCode === 13) {
      var data = {
        comment: $(this).val(),
        _token: $('#_token').val(),
        project_id: $(this).attr('data-id')
      }

      $(this).val('')

      $.post('/projects/comment', data, function (res) {
        var html = ''
        html += '<div class="comment-view z-depth-1">'
        html += '<h5>' + res.name + '</h5>'
        html += '<p>' + res.comment + '</p>'
        html += '</div>'

        $('.comments-list').append(html)
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
})
