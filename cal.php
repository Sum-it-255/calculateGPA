<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcademicSys: Exam Information Management System</title>
  <link rel="stylesheet" href="style.css">
  <style>
  
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #2c3e50;
  background: linear-gradient(rgba(245,245,245,0.9), rgba(245,245,245,0.9)),
              url('https://images.unsplash.com/photo-1580894742597-87bc8789db3d') center/cover fixed;
  margin: 0;
  padding: 0;
}

.main {
  padding-bottom: 50px;
}

/* #roleSection {
  background: rgba(255,255,255,0.9);
  border-radius: 15px;
  padding: 2rem;
  margin: 2rem auto;
  max-width: 800px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.1);
  backdrop-filter: blur(10px);
} */

/* #roleh {
  text-align: center;
  font-weight: 1000;
  font-size: 50px;
  color: #3498db;
  text-shadow: 2px 2px 4px rgba(52,152,219,0.2);
  margin-bottom: 2rem;
} */

/* .choose {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
  padding-top: 5em;
} */

/* .rolebtn {
  width: 80%;
  max-width: 300px;
  padding: 2rem;
  border: none;
  border-radius: 15px;
  background: linear-gradient(145deg, #3498db, #2980b9);
  color: white;
  font-size: 1.5rem;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(52,152,219,0.3);
} */

/* .rolebtn:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(52,152,219,0.4);
} */

table {
  width: 60%;
  margin: 20px auto;
  border-collapse: collapse;
  background-color: #f9f9f9;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

th, td {
  padding: 6px 8px;
  text-align: center;
  border: 1px solid #ddd;
}

th {
  background-color: #3498db;
  color: white;
  font-weight: bold;
}

td input {
  width: 90%;
  padding: 6px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 0.9rem;
  box-sizing: border-box;
}

td input:focus {
  border-color: #3498db;
  outline: none;
  box-shadow: 0 0 5px rgba(52,152,219,0.3);
}

button[type="button"] {
  background-color: #3498db;
  color: white;
  padding: 8px 16px;
  font-size: 1rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

button[type="button"]:hover {
  background-color: #2980b9;
}

.delete-btn {
  background-color: #e74c3c;
  color: white;
  padding: 6px 12px;
  font-size: 0.9rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.delete-btn:hover {
  background-color: #c0392b;
}

.form-buttons {
  text-align: center;
  margin-top: 20px;
}

.form-buttons button {
  margin: 10px;
}

.maincal {
  padding: 0 10px;
}

.student { 
  /* display: none; */
}

.student-form {
  max-width: 800px;
  margin: 2em auto;
  padding: 2em;
  background: #f8f9fa;
  border-radius: 10px;
  box-shadow: 0 2px 15px rgba(0,0,0,0.1);
  border: 1px solid rgba(52,152,219,0.1);
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
}

.form-group label {
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #2c3e50;
}

.form-group input,
.form-group select {
  padding: 0.8rem;
  border: 2px solid #ddd;
  border-radius: 5px;
  font-size: 1rem;
  background: rgba(255,255,255,0.9);
  transition: all 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
  border-color: #3498db;
  outline: none;
  box-shadow: 0 0 5px rgba(52,152,219,0.3);
}

.submit-btn, .back-btn {
  background: linear-gradient(145deg, #3498db, #2980b9);
  color: white;
  padding: 1rem 2rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1.1rem;
  margin-top: 1rem;
  width: 100%;
  transition: background 0.3s ease;
}

.submit-btn:hover, .back-btn:hover {
  background: #2980b9;
}

.hint {
  color: #7f8c8d;
  font-size: 0.85rem;
  margin-top: 0.3rem;
}

#subjectsectiontable {
  display: none;
  background: rgba(255,255,255,0.95);
  border-radius: 15px;
  padding: 2rem;
  margin: 2rem auto;
  box-shadow: 0 8px 32px rgba(0,0,0,0.1);
}

#subjectTable {
  background: white;
  border-radius: 10px;
  overflow: hidden;
}

#subjectTable th {
  background: linear-gradient(145deg, #3498db, #2980b9);
  color: white;
  padding: 1rem;
}

#subjectTable td {
  background: rgba(255,255,255,0.95);
}

.form-buttons button {
  background: linear-gradient(145deg, #2ecc71, #27ae60);
  color: white;
  border: none;
  padding: 12px 24px;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.form-buttons button:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(46,204,113,0.4);
}

#studentSection {
  /* display: none; */
}

.result-section {
  display: none;
  max-width: 1000px;
  margin: 2em auto;
  padding: 2em;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 15px rgba(0,0,0,0.1);
  border: 1px solid rgba(52,152,219,0.1);
}

.result-table {
  width: 100%;
  margin: 20px 0;
  border-collapse: collapse;
}

.result-table th, .result-table td {
  padding: 12px;
  border: 1px solid #ddd;
  text-align: left;
}

.result-table th {
  background: linear-gradient(145deg, #3498db, #2980b9);
  color: white;
}

.print-btn {
  background: linear-gradient(145deg, #e74c3c, #c0392b);
  border-radius: 8px;
  transition: all 0.3s ease;
  padding: 12px 24px;
  color: white;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  margin-top: 20px;
}

.print-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(231,76,60,0.4);
}

@media (max-width: 768px) {
  .student-form {
    margin: 1em;
    padding: 1em;
  }
  .choose {
    padding-top: 2em;
  }
  .rolebtn {
    width: 100%;
    padding: 1.5rem;
    font-size: 1.2rem;
  }
  #subjectsectiontable {
    padding: 1rem;
  }
}
</style>
</head>
<body>
<div class="main">
  <div class="nav_menu">
    <?php include 'nav.php'; ?>
  </div>

<!--   
  <div id="roleSection">
    <h1 id="roleh">YOUR ROLE</h1>
    <div class="choose">
      <button class="rolebtn" id="studentBtn" value="student">STUDENT</button>
      <button class="rolebtn" id="teacherBtn" value="teacher">TEACHER</button>
    </div>
  </div> 
  -->

  
  <div class="student" id="studentSection">
    
    <form id="studentForm" class="student-form"  autocomplete="on" onsubmit="return validate();">
      <div class="form-grid">
        <div class="form-group">
          <label for="institution">School/College Name:</label>
          <input type="text" id="institution" name="institution" required placeholder="Enter full institution name" value="">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required placeholder="Enter your username" value="">
        </div>
        <div class="form-group">
          <label for="student_id">Student ID:</label>
          <input type="text" id="student_id" name="student_id" required placeholder="Enter your student ID" value="">
        </div>
        <div class="form-group">
          <label for="class">Class:</label>
          <select id="class" name="class" value="" required>
            <option value="">Select Class</option>
            <option value="11">Class 11</option>
            <option value="12">Class 12</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="section">Section (Optional):</label>
          <input type="text" id="section" name="section" placeholder="e.g., A, B, C" maxlength="1" pattern="[A-Za-z]" value="">
        </div>
        <div class="form-group">
          <label for="roll_number">Roll Number:</label>
          <input type="number" id="roll_number" name="roll_number" required min="1" placeholder="Enter roll number" value="">
        </div>
        <div class="form-group">
          <label for="examTerm">Examination Term:</label>
          <select id="examTerm" name="examTerm"  value="" required>
            <option value="">Select Term</option>
            <option value="First Term">First Term</option>
            <option value="Second Term">Second Term</option>
            <option value="Third Term">Third Term</option>
            <option value="Fourth Term">Fourth Term</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
  <label for="examYear">Examination Year:</label>
  <select id="examYear" name="examYear" required>
    <option value="">Select Year</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
  </select>
</div>
      </div>
      <button type="submit" class="submit-btn" id="stdbtn"> Submit Details</button>
      <button type="button" class="back-btn" onclick="showRoleSection()">← Back</button>
    </form>
  </div>
  
  
  <div id="subjectsectiontable">
      <table id="subjectTable">
        <thead>
          <tr>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Credit Hours</th>
            <th>Max Marks</th>
            <th>Obtained Marks</th>
            <th>Grade</th>
            <th>Grade Point</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td><input type="text" name="Subcode" placeholder="Subject Code" value="0081"></td>
            <td><input type="text" name="Subname" placeholder="Subject Name" value="Mathematics(TH)" required></td>
            <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="3.75" required></td>
            <td><input type="number" name="maxMarks" placeholder="Max Marks" value="75" required></td>
            <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="75" min="0" oninput="calculateGrade(this)" required></td>
            <td><input type="text" name="grade" placeholder="Grade" value="" oninput="calculateFromGrade(this)" required></td>
            <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
            <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
          </tr>
          <tr>
            <td><input type="text" name="Subcode" placeholder="Subject Code" value="0082"></td>
            <td><input type="text" name="Subname" placeholder="Subject Name" value="Mathematics(IN)" required></td>
            <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="1.25" required></td>
            <td><input type="number" name="maxMarks" placeholder="Max Marks" value="25" required></td>
            <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="25" min="0" oninput="calculateGrade(this)" required></td>
            <td><input type="text" name="grade" placeholder="Grade" value="" oninput="calculateFromGrade(this)" required></td>
            <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
            <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
          </tr>
          <tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="1021"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Physics(TH)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="3.75" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="75" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="75" min="0" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" oninput="calculateFromGrade(this)" required></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
  </tr>
  <tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="1022"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Physics(IN)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="1.25" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="25" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" min="0"  max="25" value="" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value=""  oninput="calculateFromGrade(this)"required></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
  </tr>
  <tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="3021"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Chemistry(TH)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="3.75" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="75" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="75" min="0" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" oninput="calculateFromGrade(this)" required></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
  </tr>
  <tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="3022"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Chemistry(IN)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="1.25" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="25" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks"  min="0" max="25" value="" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
  </tr>
  <tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="0041"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="English(TH)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="3.0" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="75" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="75" min="0" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>
<tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="0042"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="English(IN)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="1.0" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="25" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks"  min="0" max="25" value="" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point"list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>
<tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="0021"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Nepali(TH)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="2.25" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="75" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="75" min="0"  oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>
<tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="0022"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Nepali(IN)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="0.75" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="25" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="25" min="0"  oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>
<tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="4281"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Computer(TH)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="2.5" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="50" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value=""  max="50" min="0" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>
<tr>
    <td><input type="text" name="Subcode" placeholder="Subject Code" value="4282"></td>
    <td><input type="text" name="Subname" placeholder="Subject Name" value="Computer(IN)" required></td>
    <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" value="2.5" required></td>
    <td><input type="number" name="maxMarks" placeholder="Max Marks" value="50" required></td>
    <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="50" min="0" oninput="calculateGrade(this)" required></td>
    <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
    <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required ></td>
    <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
</tr>

          
        </tbody>
        <tfoot>
          <tr>
            <td colspan="7" style="text-align: right; font-weight: bold;">Overall GPA:</td>
            <td id="overallGPA"></td>
          </tr>
        </tfoot>
      </table>

      <datalist id="gradePoints">
        <option value="4.00">
        <option value="3.60">
        <option value="3.20">
        <option value="2.80">
        <option value="2.40">
        <option value="2.00">
        <option value="1.60">
        <option value="0.00">
      </datalist>

      <div class="form-buttons">
    <button type="button" id="addSubjectBtn" onclick="addRow()">Add Subject</button>
    <button type="button" onclick="showResultSection()">Submit</button>
    <button type="button" onclick="showFormSection()">Back</button>
</div>

    </div>
</div>

<div class="result-section" id="resultSection" style="display: none;">
  <form id="resultForm" method="POST" action="insert.php">
    
    <div class="student-info">
      <h2 id="resultInstitution"></h2>
      <table class="result-table">
  <tr>
    <th>Student Name</th>
    <th>Student ID</th>
    <th>Class</th>
    <th>Section</th>
    <th>Roll No</th>
    <th>Exam Term</th>
    <th>Exam Year</th>
    <th>Overall GPA</th>
  </tr>
  <tr>
    <td id="resultUsername"></td>
    <td id="resultStudentId"></td>
    <td id="resultClass"></td>
    <td id="resultStudentSection"></td>
    <td id="resultRoll"></td>
    <td id="resultTerm"></td>
    <td id="resultYear"></td>
    <td id="resultGPA"></td>
  </tr>
</table>
    </div>

   
    <table class="result-table" id="resultSubjectTable">
      <thead>
        <tr>
          <th>Subject Code</th>
          <th>Subject Name</th>
          <th>Credit Hours</th>
          <th>Max Marks</th>
          <th>Obtained Marks</th>
          <th>Grade</th>
          <th>Grade Point</th>
        </tr>
      </thead>
      <tbody>
       
      </tbody>
    </table>

    
    <div style="text-align: center; margin-top: 20px;">
      <h3>Overall GPA: <span id="resultGPA"></span></h3>
      <button type="submit" class="print-btn">Submit Results</button>
    </div>

    
    <input type="hidden" name="institution" id="hiddenInstitution">
    <input type="hidden" name="username" id="hiddenUsername">
    <input type="hidden" name="student_id" id="hiddenStudentId">
    <input type="hidden" name="class" id="hiddenClass">
    <input type="hidden" name="section" id="hiddenSection">
    <input type="hidden" name="roll_number" id="hiddenRoll">
    <input type="hidden" name="examTerm" id="hiddenTerm">
    <input type="hidden" name="examYear" id="hiddenYear">
<input type="hidden" name="overallGPA" id="hiddenGPA">
    <input type="hidden" name="gpa" id="hiddenGPA">
  </form>
</div>

</div>




<script>
   
  //   document.getElementById("studentBtn").addEventListener("click", function() {
  //   document.getElementById("roleSection").style.display = "none";
  //   document.getElementById("studentSection").style.display = "block";
  // });
  
  
  // document.getElementById("teacherBtn").addEventListener("click", function() {
  //   document.getElementById("roleSection").style.display = "none";
  //   document.getElementById("studentSection").style.display = "block";
  // });

  // function showRoleSection() {
  //   document.getElementById("studentSection").style.display = "none";
  //   document.getElementById("roleSection").style.display = "block";
  // }

  
  function deleteRow(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
    calculateOverallGPA(); 
  }

  
  function addRow() {
    var tbody = document.querySelector("#subjectTable tbody");
    var newRow = tbody.insertRow(-1);

    newRow.innerHTML = `
      <td><input type="text" name="Subcode" placeholder="Subject Code"></td>
      <td><input type="text" name="Subname" placeholder="Subject Name" required></td>
      <td><input type="number" step="0.01" name="credit" placeholder="Credit Hours" required></td>
      <td><input type="number" name="maxMarks" placeholder="Max Marks" required></td>
      <td><input type="number" name="obtainedMarks" placeholder="Obtained Marks" value="" max="50" min="0" oninput="calculateGrade(this)" required></td>
      <td><input type="text" name="grade" placeholder="Grade" value="" required oninput="calculateFromGrade(this)"></td>
      <td><input type="number" step="0.01" name="gradePoint" placeholder="Grade Point" list="gradePoints" oninput="calculateFromGradePoint(this)" value="" required></td>
      <td><button type="button" class="delete-btn" onclick="deleteRow(this)">Delete</button></td>
    `;
  }
  function validate() {
  event.preventDefault(); 

  var institution = document.getElementById('institution').value.trim();
  var username = document.getElementById('username').value.trim();
  var student_id = document.getElementById('student_id').value.trim();
  var className = document.getElementById('class').value.trim();
  var roll_number = document.getElementById('roll_number').value.trim();
  var examTerm = document.getElementById('examTerm').value.trim();

  if (!institution || !username || !student_id || !className || !roll_number || !examTerm) {
    alert("Please fill in all required fields.");
    return false;
  } else {
    document.getElementById("studentSection").style.display = "none";
    document.getElementById("subjectsectiontable").style.display = "block";
    return false;
  }
}

  
  function calculateGrade(input) {
    let row = input.parentElement.parentElement;
    let maxMarks = parseFloat(row.querySelector('[name="maxMarks"]').value);
    let obtainedMarks = parseFloat(input.value);

    if (isNaN(maxMarks) || isNaN(obtainedMarks) || obtainedMarks > maxMarks || obtainedMarks < 0) {
      row.querySelector('[name="grade"]').value = "Invalid";
      row.querySelector('[name="gradePoint"]').value = "";
      calculateOverallGPA();
      return;
    }

    let percentage = (obtainedMarks / maxMarks) * 100;
    let grade = "NG";
    let gradePoint = 0.00;

    if (percentage >= 90) {
      grade = "A+";
      gradePoint = 4.00;
    } else if (percentage >= 80) {
      grade = "A";
      gradePoint = 3.60;
    } else if (percentage >= 70) {
      grade = "B+";
      gradePoint = 3.20;
    } else if (percentage >= 60) {
      grade = "B";
      gradePoint = 2.80;
    } else if (percentage >= 50) {
      grade = "C+";
      gradePoint = 2.40;
    } else if (percentage >= 40) {
      grade = "C";
      gradePoint = 2.00;
    } else if (percentage >= 35) {
      grade = "D+";
      gradePoint = 1.60;
    }

    row.querySelector('[name="grade"]').value = grade;
    row.querySelector('[name="gradePoint"]').value = gradePoint;
    calculateOverallGPA();
  }

  function calculateFromGrade(input) {
    let row = input.parentElement.parentElement;
    let maxMarks = parseFloat(row.querySelector('[name="maxMarks"]').value);
    let grade = input.value.toUpperCase().trim();
    let obtainedMarks = 0;
    let gradePoint = 0.00;

    if (grade === "A+") {
      obtainedMarks = Math.ceil(0.91 * maxMarks);
      gradePoint = 4.00;
    } else if (grade === "A") {
      obtainedMarks = Math.ceil(0.81 * maxMarks);
      gradePoint = 3.60;
    } else if (grade === "B+") {
      obtainedMarks = Math.ceil(0.71 * maxMarks);
      gradePoint = 3.20;
    } else if (grade === "B") {
      obtainedMarks = Math.ceil(0.61 * maxMarks);
      gradePoint = 2.80;
    } else if (grade === "C+") {
      obtainedMarks = Math.ceil(0.51 * maxMarks);
      gradePoint = 2.40;
    } else if (grade === "C") {
      obtainedMarks = Math.ceil(0.41 * maxMarks);
      gradePoint = 2.00;
    } else if (grade === "D+") {
      obtainedMarks = Math.ceil(0.35 * maxMarks);
      gradePoint = 1.60;
    } else {
      obtainedMarks = 0;
      gradePoint = 0.00;
    }

    row.querySelector('[name="obtainedMarks"]').value = obtainedMarks;
    row.querySelector('[name="gradePoint"]').value = gradePoint;
    calculateOverallGPA();
  }

  function calculateFromGradePoint(input) {
    let row = input.parentElement.parentElement;
    let maxMarks = parseFloat(row.querySelector('[name="maxMarks"]').value);
    let gradePoint = parseFloat(input.value);
    let obtainedMarks = 0;
    let grade = "NG";

    if (gradePoint === 4.00) {
      obtainedMarks = Math.ceil(0.91 * maxMarks);
      grade = "A+";
    } else if (gradePoint === 3.60) {
      obtainedMarks = Math.ceil(0.81 * maxMarks);
      grade = "A";
    } else if (gradePoint === 3.20) {
      obtainedMarks = Math.ceil(0.71 * maxMarks);
      grade = "B+";
    } else if (gradePoint === 2.80) {
      obtainedMarks = Math.ceil(0.61 * maxMarks);
      grade = "B";
    } else if (gradePoint === 2.40) {
      obtainedMarks = Math.ceil(0.51 * maxMarks);
      grade = "C+";
    } else if (gradePoint === 2.00) {
      obtainedMarks = Math.ceil(0.41 * maxMarks);
      grade = "C";
    } else if (gradePoint === 1.60) {
      obtainedMarks = Math.ceil(0.35 * maxMarks);
      grade = "D+";
    } else {
      obtainedMarks = 0;
      grade = "NG";
    }

    row.querySelector('[name="obtainedMarks"]').value = obtainedMarks;
    row.querySelector('[name="grade"]').value = grade;
    calculateOverallGPA();
  }

  
  function calculateOverallGPA() {
    var table = document.getElementById("subjectTable");
    var tbody = table.getElementsByTagName("tbody")[0];
    var subjectRows = tbody.getElementsByTagName("tr");
    var totalCreditHours = 0;
    var weightedSum = 0;
    
    for (var i = 0; i < subjectRows.length; i++) {
      var credit = parseFloat(subjectRows[i].querySelector('[name="credit"]').value);
      var gradePoint = parseFloat(subjectRows[i].querySelector('[name="gradePoint"]').value);
      if (!isNaN(credit) && !isNaN(gradePoint)) {
        totalCreditHours += credit;
        weightedSum += credit * gradePoint;
      }
    }
    
    var overallGPA = totalCreditHours > 0 ? weightedSum / totalCreditHours : 0;
    document.getElementById("overallGPA").innerText = overallGPA.toFixed(2);
    document.getElementById("hiddenGPA").value = overallGPA.toFixed(2); 
  }

  
  function showFormSection() {
    document.getElementById("subjectsectiontable").style.display = "none";
    document.getElementById("studentSection").style.display = "block";
  }

  window.onload = function() {
    document.getElementById("resultRoll").textContent = document.getElementById("roll_number").value;
};

function showResultSection() {
  
  const subjectTableDiv = document.getElementById("subjectsectiontable");
  const roleSectionDiv  = document.getElementById("roleSection");
  const studentSection  = document.getElementById("studentSection");
  const resultDiv       = document.getElementById("resultSection");

  if (subjectTableDiv) subjectTableDiv.style.display = "none";
  if (roleSectionDiv)  roleSectionDiv.style.display  = "none";
  if (studentSection)  studentSection.style.display  = "none";

  
  document.getElementById("resultInstitution").innerText     = document.getElementById("institution").value;
  document.getElementById("resultUsername").innerText        = document.getElementById("username").value;
  document.getElementById("resultStudentId").innerText       = document.getElementById("student_id").value;
  document.getElementById("resultClass").innerText           = document.getElementById("class").value;
  
  document.getElementById("resultStudentSection").innerText  = document.getElementById("section").value || 'N/A';
  document.getElementById("resultRoll").innerText            = document.getElementById("roll_number").value;
  document.getElementById("resultTerm").innerText            = document.getElementById("examTerm").value;
  document.getElementById("resultGPA").innerText             = document.getElementById("overallGPA").innerText;


  
  document.getElementById("resultYear").textContent = document.getElementById("examYear").value;
  document.getElementById("resultGPA").textContent = document.getElementById("overallGPA").innerText;

  
  document.getElementById("hiddenYear").value = document.getElementById("examYear").value;
  document.getElementById("hiddenGPA").value = document.getElementById("overallGPA").innerText;


  
  document.getElementById("hiddenInstitution").value = document.getElementById("institution").value;
  document.getElementById("hiddenUsername").value    = document.getElementById("username").value;
  document.getElementById("hiddenStudentId").value   = document.getElementById("student_id").value;
  document.getElementById("hiddenClass").value       = document.getElementById("class").value;
  document.getElementById("hiddenSection").value     = document.getElementById("section").value || '';
  document.getElementById("hiddenRoll").value        = document.getElementById("roll_number").value;
  document.getElementById("hiddenTerm").value        = document.getElementById("examTerm").value;
  document.getElementById("hiddenGPA").value         = document.getElementById("overallGPA").innerText;

  
  const resultSubjectTbody = document.querySelector("#resultSubjectTable tbody");
  resultSubjectTbody.innerHTML = ''; 

  document.querySelectorAll("#subjectTable tbody tr").forEach(row => {
    const cells = row.querySelectorAll("td");
    if (cells.length < 7) return; 

    const newRow = document.createElement("tr");
    newRow.innerHTML = `
      <td>${cells[0].querySelector("input").value}</td>
      <td>${cells[1].querySelector("input").value}</td>
      <td>${cells[2].querySelector("input").value}</td>
      <td>${cells[3].querySelector("input").value}</td>
      <td>${cells[4].querySelector("input").value}</td>
      <td>${cells[5].querySelector("input").value}</td>
      <td>${cells[6].querySelector("input").value}</td>
    `;
    resultSubjectTbody.appendChild(newRow);
  });

  
  resultDiv.style.display = "block";
}
</script>
</body>
</html>




