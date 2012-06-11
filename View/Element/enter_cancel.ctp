<script type="text/javascript">
  (function() {
    $('IssueSubject').observe('keypress', function(evt) {
      if (evt.keyCode == Event.KEY_RETURN) {
        Event.stop(evt);
      }
    });
  })();
</script>
