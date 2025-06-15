<style>
  /* Font Times New Roman untuk semua */
  * {
    font-family: "Times New Roman", Times, serif;
  }

  /* Background */
  body {
    background: url('https://i.pinimg.com/736x/b5/7d/89/b57d89e0702c01c839997879b82f79cc.jpg');
    background-size: cover;
    background-attachment: fixed;
    margin: 0;
    padding: 40px;
    color: #99004d;
  }

  /* Box tengah agak ke kanan */
  .center-box {
    background-color: rgba(255, 182, 193, 0.85); /* lightpink semi transparan */
    max-width: 600px;
    padding: 30px 40px;
    margin: 80px auto 0 35%;  /* margin-top 80px, margin-right auto, margin-left 40% */
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(255, 105, 180, 0.4);
    text-align: center;
  }

  h1 {
    color: #cc0066;
    font-size: 32px;
    margin-bottom: 15px;
  }

  p {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .btn-primary, .btn-secondary {
    display: inline-block;
    padding: 10px 18px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 10px;
    margin: 8px;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(255, 105, 180, 0.3);
    text-align: center;
  }

  .btn-primary {
    background-color: #ff4da6;
    color: white;
    border: 2px solid #ff80c0;
  }

  .btn-primary:hover {
    background-color: #ff66b2;
  }

  .btn-secondary {
    background-color: #ffd6e7;
    color: #99004d;
    border: 2px solid #ff99bb;
  }

  .btn-secondary:hover {
    background-color: #ffcce5;
    color: white;
  }
</style>

<div class="center-box">
  <h1>Welcome to Your Lovely Dashboard 🌷</h1>
  <p>We're so happy to see you! 🌈 Stay healthy and happy 💕</p>
  
  <button class="btn-primary">🏠 Home</button>
  <button class="btn-secondary">✨ Dashboard</button>
</div>
