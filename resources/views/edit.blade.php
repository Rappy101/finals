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
        margin: 0 auto;
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
    .form-field {
        margin-bottom: 15px;
    }
    .form-field label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-field input,
    .form-field textarea {
        width: 100%;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    .save-button {
        display: block;
        width: 100%;
        background-color: #54AFE4;
        color: #fff;
        font-size: 16px;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        text-align: center;
        margin-top: 20px;
    }
    .save-button:hover {
        background-color: #3e8ac9;
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

<meta name="csrf-token" content="{{ csrf_token() }}">

<nav class="navbar">
    <div class="nav-container">
  
      <a href="dashboard" class="back-button">Back</a>
    </div>
  </nav>

<div class="container">
    <form id="profile-form">
        <div class="header">
            <div class="profile-picture">
                <img src="{{$information->profile}}" alt="Profile Picture" class="profile-img" id="profile-preview">
            </div>
        </div>

        <div class="form-field">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" value="{{$information->name}}" required>
        </div>

        <div class="form-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{$information->email}}" required>
        </div>

        <div class="form-field">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="{{$information->address}}" required>
        </div>

        <div class="form-field">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4" required>{{$information->description}}</textarea>
        </div>

        <div class="form-field">
            <label for="schoolName">School Name</label>
            <input type="text" id="schoolName" name="schoolName" value="{{$information->schoolName}}">
        </div>

        <div class="form-field">
            <label for="schoolDate1">School Duration</label>
            <input type="text" id="schoolDate1" name="schoolDate1" value="{{$information->schoolDate1}}">
        </div>

        <div class="form-field">
            <label for="skills">Project</label>
        <div>
            <textarea id="skills" name="skills" rows="3">{{$information->projectName1}}</textarea>
        </div>

        <div>
            <textarea id="skills" name="skills" rows="3">{{$information->projectDesc1}}</textarea>
        </div>

        <div class="form-field">
            <label for="skills">Project 2</label>
        <div>

            <div>
                <textarea id="skills" name="skills" rows="3">{{$information->projectName2}}</textarea>
            </div>
    
            <div>
                <textarea id="skills" name="skills" rows="3">{{$information->projectDesc2}}</textarea>
            </div>
        




        <div class="form-field">
            <label for="skills">Skills</label>
            <textarea id="skills" name="skills" rows="3">{{$information->skills}}</textarea>
        </div>
        
        <div class="form-field">
            <label for="interest">Interests</label>
            <textarea id="interest" name="interest" rows="3">{{$information->interest}}</textarea>
        </div>
        <div class="form-field">
            <label for="status">Status</label>
            <select id="status" name="status" enable>
                
                
                <option value="Pending" {{$information->status == 'Pending' ? 'selected' : ''}}>Pending</option>
                <option value="Accepted" {{$information->status == 'Accepted' ? 'selected' : ''}}>Accepted</option>
                <option value="Reject" {{$information->status == 'Reject' ? 'selected' : ''}}>Reject</option>
            </select>
        </div>
        
        

        <button type="submit" class="save-button">Save</button>
    </form>
</div>

<script>
    document.getElementById('profile-form').addEventListener('submit', async function(event) {
    event.preventDefault(); 

    const formData = new FormData(this); 
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); 

    
    const id = new URLSearchParams(window.location.search).get('id'); 
    if (id) {
        formData.append('id', id); 
    }

    try {
        const response = await fetch('/save-profile', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken 
            }
        });

        const result = await response.json();

        if (response.ok) {
            alert('Profile saved successfully!');
            window.location.href = '/edit?id=' + result.id;
        } else {
            alert('Error saving profile: ' + result.error || 'Unknown error');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred while saving.');
    }
});


</script>

