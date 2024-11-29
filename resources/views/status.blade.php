<link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html {
        height: 100%;
    }
    body {
        min-height: 100%;
        background: #eee;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        color: #222;
        font-size: 14px;
        line-height: 26px;
        padding-bottom: 50px;
    }

    .container {
        max-width: 700px;
        background: #fff;
        margin: 0px auto;
        box-shadow: 1px 1px 2px #DAD7D7;
        border-radius: 3px;
        padding: 40px;
        margin-top: 50px;
    }

    .header {
        margin-bottom: 30px;
    }

    .profile-picture {
        text-align: center;
        margin-bottom: 20px;
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #54AFE4;
    }

    .details {
        line-height: 20px;
    }

    .navbar {
        background-color: #54AFE4;
        color: #fff;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .nav-container {
        max-width: 700px;
        margin: 0 auto;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .back-button {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        padding: 5px 10px;
        border: 1px solid #fff;
        border-radius: 3px;
        transition: background-color 0.3s ease, color 0.3s ease;
        margin-left: auto;
    }

    .back-button:hover {
        background-color: #fff;
        color: #54AFE4;
    }

    .nav-title {
        font-weight: bold;
        font-size: 18px;
    }

    .status-container {
        margin-top: 20px;
    }

    .status-container h3 {
        font-weight: bold;
        font-size: 18px;
        color: #54AFE4;
    }

    .status-dropdown {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        background-color: #f9f9f9;
        color: #333;
        pointer-events: none;
    }

    .status-dropdown:focus {
        outline: none;
        border-color: #54AFE4;
    }

    .status-option {
        padding: 10px;
    }

</style>

<nav class="navbar">
  <div class="nav-container">
    <a href="dashboard" class="back-button">Back</a>
  </div>
</nav>

<div class="container">
  <div class="header">
    <div class="profile-picture">
      <img src="{{$information->profile}}" alt="Profile Picture" class="profile-img">
    </div>
    <div class="full-name">
      <span class="first-name">{{$information->name}}</span>
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val">{{$information->email}}</span>
    </div>
    <div class="contact-info">
      <span class="email">Address: </span>
      <span class="email-val">{{$information->address}}</span>
    </div>

    <div class="status-container">
        <h3>Status:</h3>
        <select id="status" name="status" class="status-dropdown" disabled>
            <option value="Reject" {{$information->status == 'Reject' ? 'selected' : ''}}>Reject</option>
            <option value="Accepted" {{$information->status == 'Accepted' ? 'selected' : ''}}>Accepted</option>
            <option value="Pending" {{$information->status == 'Pending' ? 'selected' : ''}}>Pending</option>
        </select>
    </div>
  </div>
</div>
