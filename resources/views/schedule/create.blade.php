
<form action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  Title:
  <br />
  <!-- name이 백한테 넘겨주는 거  -->
  <input type="text" name="title" />
  <br /><br />
  Contents:
  <br />
  <textarea name="content"></textarea>
  <br /><br />
  Date:
  <br />
  <input type="text" name="date" class="date" placeholder="날짜선택" />

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
  <script>
      $('.date').datepicker({
          autoclose: true,
          dateFormat: "yy-mm-dd"
      });
  </script>


  <br /><br />
  <input type="submit" value="Save" />
</form>
