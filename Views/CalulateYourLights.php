{% extends ./Views/ground/layout.html %}

{% block title %}Home Page{% endblock %}

{% block content %}
<h1>Home</h1>
<form method="post">
  <div class="wrapper">
    <div class="input-box">
      <input type="text" name="input_name[]">
      <button class="btn add-btn">Add More</button>
    </div>
  </div>
  <input type="submit" class="btn" value="Submit" />
</form>
{% endblock %}
