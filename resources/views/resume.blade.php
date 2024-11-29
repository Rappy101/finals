<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
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
    margin: 0px auto 0px; 
    box-shadow: 1px 1px 2px #DAD7D7;
    border-radius: 3px;  
    padding: 40px;
    margin-top: 50px;
  }
  
  .header {
    margin-bottom: 30px;
    
    .full-name {
      font-size: 40px;
      text-transform: uppercase;
      margin-bottom: 5px;
    }
    
    .first-name {
      font-weight: 700;
    }
    
    .last-name {
      font-weight: 300;
    }
    
    .contact-info {
      margin-bottom: 20px;
    }
    
    .email ,
    .phone {
      color: #999;
      font-weight: 300;
    } 
    
    .separator {
      height: 10px;
      display: inline-block;
      border-left: 2px solid #999;
      margin: 0px 10px;
    }
    
    .position {
      font-weight: bold;
      display: inline-block;
      margin-right: 10px;
      text-decoration: underline;
    }
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
    
    .section {
      margin-bottom: 40px;  
    }
    
    .section:last-of-type {
      margin-bottom: 0px;  
    }
    
    .section__title {
      letter-spacing: 2px;
      color: #54AFE4;
      font-weight: bold;
      margin-bottom: 10px;
      text-transform: uppercase;
    }
    
    .section__list-item {
      margin-bottom: 40px;
    }
    
    .section__list-item:last-of-type {
      margin-bottom: 0;
    }
    
    .left ,
    .right {
      vertical-align: top;
      display: inline-block;
    }
    
    .left {
      width: 60%;    
    }
    
    .right {
      tex-align: right;
      width: 39%;    
    }
    
    .name {
      font-weight: bold;
    }
    
    a {
      text-decoration: none;
      color: #000;
      font-style: italic;
    }
    
    a:hover {
      text-decoration: underline;
      color: #000;
    }
    
    .skills {
      
    }
      
    .skills__item {
      margin-bottom: 10px;  
    }
    
    .skills__item .right {
      input {
        display: none;
      }
      
      label {
        display: inline-block;  
        width: 20px;
        height: 20px;
        background: #C3DEF3;
        border-radius: 20px;
        margin-right: 3px;
      }
      
      input:checked + label {
        background: #79A9CE;
      }
    }
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
<div class="container">
  <div class="header">
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
    
    <div class="about">
      <span class="position">Information technology </span>
      <span class="desc">{{$information->description}}
      </span>
    </div>
  </div>
   <div class="details">
    
      
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name">{{$information->schoolName}}</div>
            <div class="duration">{{$information->schoolDate1}}</div>
          </div>
        </div>
        <div class="section__list-item">
          <div class="left">
            <div class="name">{{$information->schoolName2}}</div>
            <div class="duration">{{$information->schoolDate2}}</div>
          </div>
        </div>

      </div>
      
  </div>
     <div class="section">
      <div class="section__title">Projects</div> 
       <div class="section__list">
         <div class="section__list-item">
           <div class="name">{{$information->projectName1}}</div>
           <div class="text">{{$information->projectDesc1}}</div>
         </div>
         
         <div class="section__list-item">
                    <div class="name">{{$information->projectName2}}</div>
           <div class="text">{{$information->projectDesc2}}
           </div>
         </div>
       </div>
    </div>
    <div class="section">
      <div class="section__title">
        Skills
        </div>
        <div class="section__list">
          <div class="section__list-item">
           {{$information->skills}}
           </div>
        </div>
      </div>
   
     <div class="section">
     <div class="section__title">
       Interests
       </div>
       <div class="section__list">
         <div class="section__list-item">
          {{$information->interest}}
          </div>
       </div>
     </div>
     </div>
  </div>
</div>