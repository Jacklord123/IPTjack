@extends('base')

@section('content')

<style>
  body {
    background: url(blackmirror.jpg);
  }
</style>

<div class="container">
      <div class="card">
        <div class="card-header">
          <img src="https://i.postimg.cc/tTDvHXDX/rover.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <span class="tag tag-teal">
            Technology
          </span>
          <h4>Why is the Tesla Cybertruck desigined the way it is?</h4>
          <p>An exploration into the trucks polarising design</p>
          <div class="user">
            <img src="https://i.postimg.cc/Hk7N71W2/user-1.jpg" alt="user 1" />
            <div class="user-info">
              <h5>Inday Baduday</h5>
              <small>Car Mechanic</small>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="https://i.postimg.cc/ZKQgR5mn/ballons.jpg" alt="ballons" />
        </div>
        <div class="card-body">
          <span class="tag tag-purple">
            Popular
          </span>
          <h4>How To Keep Going When You Dont Know What's Next?</h4>
          <p>
            The future can be scary, but there are ways to deal with that fear
          </p>
          <div class="user">
            <img src="https://i.postimg.cc/tgQM3vYH/user-2.jpg" alt="user 2" />
            <div class="user-info">
              <h5>Bordelo Sukamod</h5>
              <small>Balloon Experts</small>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <img src="https://i.postimg.cc/MTz34c7P/city.jpg" alt="city" />
        </div>
        <div class="card-body">
          <span class="tag tag-pink">
            Design
          </span>
          <h4>10 Rules Of Dashboard Design</h4>
          <p>Dashboard design guidelines</p>
          <div class="user">
            <img src="https://i.postimg.cc/7L3Qm12J/user-3.jpg" alt="user 3" />
            <div class="user-info">
              <h5>Burakdat Ingod</h5>
              <small>Building Photographer</small>
            </div>
          </div>
        </div>
      </div>
    </div>

  <style>
    * {
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,400;1,600&display=swap");
* {
  box-sizing: border-box;
}

body {
  background-color: #f7f8fc;
  font-family: "Open Sans", sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}

.container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  width: 940px;
  margin: auto;
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
  overflow: hidden;
  width: 300px;
  transition: 0.5 ease;
  cursor: pointer;
}
.card:hover {
  transform: scale(1.1);
  box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
}

.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-body {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 20px;
  min-height: 250px;
  min-height: 250px;
}

.tag {
  background: #777;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
}

.tag-teal {
  background-color: #92d4e4;
}
.tag-purple {
  background-color: #3d1d94;
}
.tag-pink {
  background-color: #c62bcb;
}

.card-body h4 {
  margin: 10px 0;
}
.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.user {
  display: flex;
  margin-top: auto;
}
.user img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #888785;
}

@media (max-width: 940px) {
  .container {
    grid-template-columns: 1fr;
    justify-items: center;
  }
}


    
@endsection

