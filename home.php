<!DOCTYPE html>
<html>
<style>
body {
  margin: 0;
  padding: 0;
  background: #ffffff;

}
.nav ul {
  list-style: none;
  background-color: #9c9d9e;
  text-align: center;
  padding: 0;
  float: left;
  margin: 0;
}
.nav li {
  font-family: 'Roboto Slab', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
.nav a:hover {
  background-color: #ffb726;
}
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
@media screen and (min-width: 1200px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }

  .demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 500px;
  background: url('/hive.png') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
</style>
<head>
	<title>Home</title>
</head>
<body class="news">
  <header>
    <div class="nav">
      <ul>
        <li class="home"><a href="#">Home</a></li>
        <li class="tutorials"><a href="#">Tutorials</a></li>
        <li class="about"><a href="#">About</a></li>
        <li class="news"><a href="#">Newsletter</a></li>
        <li class="contact"><a href="#">Contact</a></li>
      </ul>
    </div>
</body>
</html>