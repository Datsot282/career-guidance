@extends('web_front.mainbase')

@section('title')
HOME
@endsection

@section('content')
    <div class="col-sm-8 text-left">
      <h2>Introduction</h2>
<p>Member Schools use the platform to support the delivery of employability programmes and manage careers guidance and advice. Each school has a bespoke front-end to establish year groups, classes and cohorts of students based on pathways. Career Advisors have access to each student’s digital career profile, including the results of their assessments. This means Career Advisors can develop and deliver customized learning which meets the unique needs of each student. Schools are further supported by a series of Lesson Plans and Audio Courses which dove-tail with the digital platform. Because the platform is available in the cloud, students are able to learn both inside and outside of formal classes.

    Students can sign up to the platform directly, free of charge and complete their EPIC (Explore, Prepare, Inspire Connect) career journey. They can use the AI-backed features to unearth their skills and create high-impact tailored career assets, such as Personal Statements, CVs and Elevator Pitches. The platform’s video app enables students to develop and rehearse answers to interview questions for any job. Students use the platform’s integrated Job Board to share their profile with employers on live opportunities.
</p>

      <hr>
      <h3>Important Info</h3>
      <p style="background-color:#EEEEEE;color: black">Gaming - a set of nine (gamified) cognitive assessments help students practice and test skills like logical reasoning, mental flexibility and working memory. These games mirror how students may be assessed by large corporates in their application processes.

          Social Media – when students complete their personality test, they are assigned one of eight personality types. These “personas” are underpinned by artwork and short mission statements, which are then shared by students on social media.

          Video Streaming – The video app helps students to prepare an elevator pitch and first-round hiring interviews, which are shared digitally with universities and employers. Peer review feedback can also be recorded by video and included as part of the student career profile.</p>
      <a href="{{url('/col_student_login')}}" class="btn btn-lg btn-danger" style="width: 100%">Registered User</a>
      <br/><br/>
      <a href="{{url('/col_student_register')}}" class="btn btn-lg btn-warning" style="width: 100%">New Application</a>
      <br/>
    </div>
@endsection
