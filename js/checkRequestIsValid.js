/**
 * Functions and event handlers specific to record pages.
 * AK: Tweaking displayed messages/buttons.
 */
function checkRequestIsValid(element, requestType) {
    var match = new URL(element.href, window.location.href).pathname.match(/\/(?:Record|resources)\/([^/]+)\//i);
    if (!match) return;
    var recordId = decodeURIComponent(match[1]);
    var vars = deparam(element.href);
    vars.id = recordId;

    var url = VuFind.path + '/AJAX/JSON?' + $.param({
      method: 'checkRequestIsValid',
      id: recordId,
      requestType: requestType,
      data: vars
    });
    $.ajax({
      dataType: 'json',
      cache: false,
      url: url
    })
      .done(function checkValidDone(response) {
        if (response.data.status) {
          $(element).removeClass('disabled')
            .attr('title', response.data.msg)
            .text(response.data.msg);
        } else {
          // AK: Set text to the parent of the link element and then
          // remove it
          $(element).parent().text(response.data.msg);
          $(element).remove();
        }
      })
      .fail(function checkValidFail(/*response*/) {
        $(element).remove();
      });
}
