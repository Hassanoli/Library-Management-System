<div class="page-content" style="padding:2rem; background:linear-gradient(135deg,#f5faff 0%,#f0f4ff 100%); min-height:100vh; font-family:'Inter',sans-serif;">
    <div class="container-fluid" style="max-width:1100px; margin:auto;">
        <h2 style="font-size:2.2rem; font-weight:700; margin-bottom:2.5rem; color:#222; text-align:center; letter-spacing:1px;">Dashboard</h2>
        <div class="row justify-content-center" style="gap:2rem;">
            <div class="col-md-3 col-sm-6 dashboard-card" style="background:linear-gradient(135deg,#fff 60%,#eaf3ff 100%); border-radius:18px; box-shadow:0 4px 24px rgba(79,140,255,0.08); padding:2.7rem 1.2rem; text-align:center; margin-bottom:2rem; transition:transform 0.18s,box-shadow 0.18s; cursor:pointer;">
                <div style="font-size:2.7rem; font-weight:700; color:#4f8cff;">{{ $user }}</div>
                <div style="font-size:1.18rem; color:#555; margin-top:0.5rem;">Total Users</div>
            </div>
            <div class="col-md-3 col-sm-6 dashboard-card" style="background:linear-gradient(135deg,#fff 60%,#eaf3ff 100%); border-radius:18px; box-shadow:0 4px 24px rgba(79,140,255,0.08); padding:2.7rem 1.2rem; text-align:center; margin-bottom:2rem; transition:transform 0.18s,box-shadow 0.18s; cursor:pointer;">
                <div style="font-size:2.7rem; font-weight:700; color:#4f8cff;">{{ $book }}</div>
                <div style="font-size:1.18rem; color:#555; margin-top:0.5rem;">Total Books</div>
            </div>
            <div class="col-md-3 col-sm-6 dashboard-card" style="background:linear-gradient(135deg,#fff 60%,#eaf3ff 100%); border-radius:18px; box-shadow:0 4px 24px rgba(79,140,255,0.08); padding:2.7rem 1.2rem; text-align:center; margin-bottom:2rem; transition:transform 0.18s,box-shadow 0.18s; cursor:pointer;">
                <div style="font-size:2.7rem; font-weight:700; color:#4f8cff;">{{ $borrow }}</div>
                <div style="font-size:1.18rem; color:#555; margin-top:0.5rem;">Borrowed Books</div>
            </div>
            <div class="col-md-3 col-sm-6 dashboard-card" style="background:linear-gradient(135deg,#fff 60%,#eaf3ff 100%); border-radius:18px; box-shadow:0 4px 24px rgba(79,140,255,0.08); padding:2.7rem 1.2rem; text-align:center; margin-bottom:2rem; transition:transform 0.18s,box-shadow 0.18s; cursor:pointer;">
                <div style="font-size:2.7rem; font-weight:700; color:#4f8cff;">{{ $returned }}</div>
                <div style="font-size:1.18rem; color:#555; margin-top:0.5rem;">Returned Books</div>
            </div>
        </div>
    </div>
    <script>
        // تأثير hover للبطاقات
        document.querySelectorAll('.dashboard-card').forEach(function(card){
            card.addEventListener('mouseenter',function(){
                card.style.transform = 'translateY(-7px) scale(1.03)';
                card.style.boxShadow = '0 8px 32px rgba(79,140,255,0.13)';
            });
            card.addEventListener('mouseleave',function(){
                card.style.transform = '';
                card.style.boxShadow = '0 4px 24px rgba(79,140,255,0.08)';
            });
        });
    </script>
</div>