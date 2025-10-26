<?php
include '../includes/db_connect.php';
include '../includes/dashboard_controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles.css" />
  <script src="index.js"></script>
</head>

<body>
  <nav>
    <p class="title">Student Task Tracker</p>
  </nav>
  <main class="container">
    <div class="sidebar">
      <p class="greeting">Welcome back!</p>
      <a>Tasks</a>
      <a>Settings</a>
    </div>
    <div class="content">
      <h1>My Tasks</h1>

      <div class="tabs">
        <div class="tab-group">
          <button class="tab active" onclick="showAll()">All</button>
          <button class="tab" onclick="showPending()">Pending</button>
          <button class="tab" onclick="showInProgress()">In Progress</button>
          <button class="tab" onclick="showCompleted()">Completed</button>
        </div>
        <div class="create-task">
          <button class="create-task-button">
            <img
              width="23"
              height="23"
              src="https://img.icons8.com/ios-glyphs/30/add--v1.png"
              alt="add--v1" />New Task
          </button>
        </div>
      </div>
      <div class="tasks-all">
        <ul class="task-headers">
          <li>Title</li>
          <li>Priority</li>
          <li>Deadline</li>
          <li>Status</li>
        </ul>

        <ul class="list-all" id="all">
          <?php foreach ($tasks as $task): ?>
            <li class="tasks-all-item">
              <span><?= htmlspecialchars($task['title']) ?></span>
              <span><?= htmlspecialchars($task['priority']) ?></span>
              <span><?= htmlspecialchars($task['due_date']) ?></span>
              <span><?= htmlspecialchars($task['status']) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Popup Modal -->
      <div id="taskPopup" class="popup-overlay">
        <div class="popup-content">
          <h2>Create New Task</h2>
          <form id="taskForm">
            <label>Title</label>
            <input type="text" id="taskTitle" required />
            <div class="priority-status">
              <div class="priority-status-column">
                <label>Priority</label>

                <select id="taskPriority" required>
                  <option value="">Select Priority</option>
                  <option value="High">High</option>
                  <option value="Medium">Medium</option>
                  <option value="Low">Low</option>
                </select>
              </div>
              <div class="priority-status-column">
                <label>Status</label>
                <select id="taskStatus" required>
                  <option value="">Select Status</option>
                  <option value="Pending">Pending</option>
                  <option value="In Progress">In Progress</option>
                  <option value="Completed">Completed</option>
                </select>
              </div>
            </div>
            <label>Deadline</label>
            <input type="date" id="taskDate" required />

            <div class="popup-buttons">
              <button type="submit">Add Task</button>
              <button type="button" onclick="closePopup()">Cancel</button>
            </div>
          </form>
        </div>
      </div>
  </main>
</body>

</html>