// Generated by CoffeeScript 1.3.3
(function() {

  Rfpez.update_notification_badge = function(count) {
    var badge, nav_item;
    nav_item = $(".notification-nav-item");
    badge = nav_item.find(".unread-notification-badge");
    if (count > 0) {
      badge.text(count);
      return badge.removeClass('hide');
    } else {
      return badge.addClass('hide');
    }
  };

  Rfpez.view_notification_payload = function(key, val) {
    return $.ajax({
      url: "/account/viewnotifications/" + key + "/" + val,
      type: "PUT",
      success: function(data) {
        return Rfpez.update_notification_badge(data.unread_count);
      }
    });
  };

  $(document).on("click", ".notification-item .mark-as-read, .notification-item .mark-as-unread", function() {
    var action, data_el, el, notification_id, notification_item;
    el = $(this);
    notification_item = el.closest(".notification-item");
    data_el = el.closest("[data-notification-id]");
    notification_id = data_el.data('notification-id');
    action = el.hasClass('mark-as-read') ? 1 : 0;
    return $.ajax({
      url: "/notifications/" + notification_id + "/markasread",
      type: "PUT",
      data: {
        action: action
      },
      success: function(data) {
        var new_notification_item;
        if (data.status === "success") {
          new_notification_item = $(data.html);
          notification_item.replaceWith(new_notification_item);
          return Rfpez.update_notification_badge(data.unread_count);
        }
      }
    });
  });

}).call(this);