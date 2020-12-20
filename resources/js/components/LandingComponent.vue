<template>
    <div>
        <div class="intro">
            <h4>Interlearn (Interactive Learning)</h4>
            <p>This tool allows its users to create two different types of content: Lesson and Quiz. Users can later share their creations via link.
            </p>
            
            <div class="areyou">
                <h5>Get started now!</h5>
                Are you a:
                <br>
                <a href="/login">
                    <button class="teacher">Teacher</button>
                </a> 
                or a
                <a href="/lessons">
                    <button class="student">Student</button>
                </a>  
            </div>
        </div> 
        <div class="about">
            <h4>About this project</h4>
            <p>The project goal was to develop a newbie, age and skill friendly online learning tool for teachers, that will be accessible by all ages, disregarding the state, or, the level of their computer knowledge and experience. The goal is to calculate the actual effectiveness of this application at eliminating the possible restraints that users might experience By introducing a blackboard-like application with clear and simple instructions, this application will optimistically prevent the intimidation of older or younger potential users, without demanding any former involvement with a similar concept. </p>
        </div>
        
        
    </div>
</template>

<style>
    .teacher {
        color: #fff;
        background-color: #599fa5;
        padding: 10px 20px;
        border: 3px solid #599fa5;
        border-radius: 25px;
        transition: .3s;
    }
    .teacher:hover {
        color: #fff !important;
        border: 3px dotted #fff;
        
    }
    
    .student {
        color: #fff;
        background-color: #edb445;
        padding: 10px 20px;
        border: 3px solid  #edb445;
        border-radius: 25px;
        transition: .3s;
        
    }
    
    .student:hover {
        color: #fff;
        border: 3px dotted #fff;
        
        
        
    }
    
    .intro {
        text-align: center;
        padding: 20px;
        border-radius: 25px;
        width: 70vw;
        margin: 0 auto;
        margin-top: 10%;
        border: 2px solid #599fa5;
    }
    
    .about {
        text-align: center;
        
        padding: 20px;
        border-radius: 25px;
        width: 70vw;
        margin: 50px auto;
        border: 2px solid #edb445;  
    }
</style>