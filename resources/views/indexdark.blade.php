<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>PhoneHub Wholesale — Premium Mobile & Accessories</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
/* ─────────── VARIABLES ─────────── */
:root{
  --bg:      #0A0A0F;
  --surface: #111118;
  --card:    #16161F;
  --card2:   #1C1C28;
  --border:  rgba(255,255,255,.07);
  --border2: rgba(255,255,255,.12);
  --gold:    #F5A623;
  --gold2:   #FFD166;
  --accent:  #6C63FF;
  --green:   #00C48C;
  --red:     #FF4757;
  --white:   #FFFFFF;
  --off:     #F0F0F0;
  --muted:   #6B7280;
  --muted2:  #9CA3AF;
  --text:    #E8E8F0;
  --f-head:  'Syne', sans-serif;
  --f-body:  'Inter', sans-serif;
  --r:       12px;
  --r2:      8px;
  --shadow:  0 20px 60px rgba(0,0,0,.6);
  --glow:    0 0 40px rgba(245,166,35,.15);
}

/* ─────────── RESET ─────────── */
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;-webkit-tap-highlight-color:transparent}
body{
  background:var(--bg);
  color:var(--text);
  font-family:var(--f-body);
  min-height:100vh;
  overflow-x:hidden;
}

/* ─────────── NOISE OVERLAY ─────────── */
body::after{
  content:'';position:fixed;inset:0;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.028'/%3E%3C/svg%3E");
  pointer-events:none;z-index:9999;opacity:.5;
}

/* ─────────── SCROLLBAR ─────────── */
::-webkit-scrollbar{width:4px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px;opacity:.5}

/* ─────────── TOP BANNER ─────────── */
.top-banner{
  background:linear-gradient(90deg,var(--gold) 0%,#FFB347 50%,var(--gold) 100%);
  background-size:200% 100%;
  animation:bannerShift 4s linear infinite;
  text-align:center;padding:.5rem 1rem;
  font-size:.75rem;font-weight:600;
  color:#0A0A0F;letter-spacing:.04em;
}
@keyframes bannerShift{0%{background-position:0% 0}100%{background-position:200% 0}}

/* ─────────── NAVBAR ─────────── */
nav{
  position:sticky;top:0;z-index:100;
  background:rgba(10,10,15,.88);
  backdrop-filter:blur(20px);
  border-bottom:1px solid var(--border);
  padding:.9rem 1.5rem;
  display:flex;align-items:center;gap:1rem;
}
.nav-logo{
  font-family:var(--f-head);
  font-size:1.3rem;font-weight:800;
  color:var(--white);
  display:flex;align-items:center;gap:.5rem;
  text-decoration:none;flex-shrink:0;
}
.nav-logo-dot{
  width:8px;height:8px;border-radius:50%;
  background:var(--gold);
  box-shadow:0 0 10px var(--gold);
  animation:dotPulse 2s ease-in-out infinite;
}
@keyframes dotPulse{0%,100%{box-shadow:0 0 8px var(--gold)}50%{box-shadow:0 0 20px var(--gold)}}
.nav-search{
  flex:1;position:relative;max-width:440px;margin:0 auto;
}
.nav-search input{
  width:100%;background:var(--card);
  border:1px solid var(--border);
  border-radius:var(--r2);
  padding:.6rem 1rem .6rem 2.6rem;
  font-size:.85rem;color:var(--text);
  font-family:var(--f-body);outline:none;
  transition:border-color .2s;
}
.nav-search input:focus{border-color:rgba(245,166,35,.4)}
.nav-search input::placeholder{color:var(--muted)}
.nav-search-icon{
  position:absolute;left:.8rem;top:50%;
  transform:translateY(-50%);color:var(--muted);
  pointer-events:none;font-size:.9rem;
}
.nav-right{display:flex;align-items:center;gap:.75rem;margin-left:auto}
.nav-phone{
  font-size:.72rem;color:var(--muted2);
  display:flex;align-items:center;gap:.4rem;
}
.cart-btn{
  position:relative;
  background:var(--gold);color:#0A0A0F;
  border:none;border-radius:var(--r2);
  padding:.55rem 1.1rem;
  font-size:.8rem;font-weight:600;
  cursor:pointer;display:flex;align-items:center;gap:.5rem;
  transition:background .2s,transform .2s;
  font-family:var(--f-body);
}
.cart-btn:hover{background:var(--gold2);transform:translateY(-1px)}
.cart-count{
  position:absolute;top:-7px;right:-7px;
  background:var(--red);color:white;
  width:18px;height:18px;border-radius:50%;
  font-size:.62rem;font-weight:700;
  display:flex;align-items:center;justify-content:center;
  border:2px solid var(--bg);
  animation:bounce .3s cubic-bezier(.36,.07,.19,.97) both;
}
@keyframes bounce{0%,100%{transform:scale(1)}40%{transform:scale(1.4)}80%{transform:scale(.9)}}

/* ─────────── HERO ─────────── */
.hero{
  position:relative;overflow:hidden;
  padding:3.5rem 1.5rem 2.5rem;
  text-align:center;
}
.hero-bg{
  position:absolute;inset:0;
  background:radial-gradient(ellipse 80% 60% at 50% 0%, rgba(245,166,35,.08) 0%, transparent 70%);
  pointer-events:none;
}
.hero-tag{
  display:inline-flex;align-items:center;gap:.5rem;
  background:rgba(245,166,35,.1);
  border:1px solid rgba(245,166,35,.25);
  border-radius:50px;padding:.35rem .9rem;
  font-size:.72rem;font-weight:600;color:var(--gold);
  letter-spacing:.06em;text-transform:uppercase;
  margin-bottom:1.2rem;
}
.hero h1{
  font-family:var(--f-head);
  font-size:clamp(1.8rem,5vw,3rem);
  font-weight:800;line-height:1.05;
  color:var(--white);margin-bottom:.8rem;
}
.hero h1 span{
  background:linear-gradient(135deg,var(--gold),var(--gold2));
  -webkit-background-clip:text;-webkit-text-fill-color:transparent;
  background-clip:text;
}
.hero-sub{
  font-size:.9rem;color:var(--muted2);
  max-width:500px;margin:0 auto 1.8rem;line-height:1.6;
}
.hero-stats{
  display:flex;gap:2rem;justify-content:center;
  flex-wrap:wrap;margin-top:1rem;
}
.h-stat{text-align:center}
.h-stat-val{
  font-family:var(--f-head);font-size:1.5rem;
  font-weight:800;color:var(--gold);
}
.h-stat-lbl{font-size:.7rem;color:var(--muted);margin-top:.15rem}

/* ─────────── CATEGORY PILLS ─────────── */
.cat-bar{
  display:flex;gap:.6rem;overflow-x:auto;
  padding:.8rem 1.5rem;
  border-bottom:1px solid var(--border);
  scrollbar-width:none;
}
.cat-bar::-webkit-scrollbar{display:none}
.cat-pill{
  flex-shrink:0;padding:.45rem 1rem;
  background:var(--card);border:1px solid var(--border);
  border-radius:50px;font-size:.78rem;font-weight:500;
  color:var(--muted2);cursor:pointer;
  transition:all .2s;white-space:nowrap;
}
.cat-pill:hover{border-color:var(--gold);color:var(--gold)}
.cat-pill.active{
  background:var(--gold);color:#0A0A0F;
  border-color:var(--gold);font-weight:700;
}

/* ─────────── LAYOUT ─────────── */
.main{padding:1.5rem;max-width:1200px;margin:0 auto}
.section-head{
  display:flex;align-items:center;
  justify-content:space-between;margin-bottom:1.2rem;
}
.section-title{
  font-family:var(--f-head);font-size:1.1rem;
  font-weight:800;color:var(--white);
  display:flex;align-items:center;gap:.5rem;
}
.section-title::before{
  content:'';width:3px;height:1.1rem;
  background:var(--gold);border-radius:2px;
}
.section-see-all{
  font-size:.75rem;color:var(--gold);
  cursor:pointer;text-decoration:none;
  font-weight:500;
}

/* ─────────── FEATURED BANNER ─────────── */
.featured-banner{
  background:linear-gradient(135deg,#1A1A2E 0%,#16213E 50%,#0F3460 100%);
  border:1px solid rgba(108,99,255,.3);
  border-radius:var(--r);
  padding:2rem;margin-bottom:2rem;
  display:flex;align-items:center;
  justify-content:space-between;gap:1.5rem;
  position:relative;overflow:hidden;
}
.featured-banner::before{
  content:'';position:absolute;
  top:-60px;right:-60px;
  width:200px;height:200px;border-radius:50%;
  background:radial-gradient(circle,rgba(108,99,255,.2),transparent);
}
.fb-left h2{
  font-family:var(--f-head);font-size:1.4rem;
  font-weight:800;color:var(--white);margin-bottom:.4rem;
}
.fb-left p{font-size:.82rem;color:var(--muted2);margin-bottom:1rem}
.fb-badge{
  display:inline-flex;gap:1rem;flex-wrap:wrap;
}
.fb-b{
  background:rgba(245,166,35,.1);border:1px solid rgba(245,166,35,.3);
  border-radius:50px;padding:.3rem .8rem;
  font-size:.72rem;font-weight:600;color:var(--gold);
}
.fb-img{
  font-size:4rem;filter:drop-shadow(0 0 20px rgba(108,99,255,.4));
  flex-shrink:0;
}

/* ─────────── PRODUCT GRID ─────────── */
.product-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
  gap:1rem;margin-bottom:2rem;
}
.product-card{
  background:var(--card);
  border:1px solid var(--border);
  border-radius:var(--r);
  overflow:hidden;cursor:pointer;
  transition:transform .25s,border-color .25s,box-shadow .25s;
  position:relative;
}
.product-card:hover{
  transform:translateY(-4px);
  border-color:rgba(245,166,35,.35);
  box-shadow:0 20px 50px rgba(0,0,0,.4),0 0 0 1px rgba(245,166,35,.1);
}
.product-badge{
  position:absolute;top:.7rem;left:.7rem;z-index:2;
  font-size:.62rem;font-weight:700;
  padding:.22rem .6rem;border-radius:4px;
  letter-spacing:.04em;text-transform:uppercase;
}
.badge-hot{background:#FF4757;color:white}
.badge-new{background:var(--accent);color:white}
.badge-sale{background:var(--green);color:white}
.badge-low{background:#FF9500;color:white}
.product-img{
  height:160px;
  display:flex;align-items:center;justify-content:center;
  background:linear-gradient(135deg,var(--card2),var(--surface));
  font-size:3.5rem;
  position:relative;overflow:hidden;
}
.product-img::after{
  content:'';position:absolute;inset:0;
  background:radial-gradient(circle at 50% 100%,rgba(245,166,35,.06),transparent);
}
.product-info{padding:1rem}
.product-brand{
  font-size:.65rem;color:var(--gold);font-weight:600;
  letter-spacing:.08em;text-transform:uppercase;margin-bottom:.3rem;
}
.product-name{
  font-size:.88rem;font-weight:600;color:var(--white);
  line-height:1.3;margin-bottom:.5rem;
}
.product-meta{
  display:flex;align-items:center;
  justify-content:space-between;margin-bottom:.75rem;
}
.product-price{
  font-family:var(--f-head);font-size:1.05rem;
  font-weight:800;color:var(--gold);
}
.product-unit{font-size:.65rem;color:var(--muted);margin-left:.2rem}
.product-moq{
  font-size:.65rem;color:var(--muted2);
  background:var(--card2);
  padding:.2rem .5rem;border-radius:4px;
}
.product-stock{
  display:flex;align-items:center;gap:.4rem;
  margin-bottom:.75rem;font-size:.72rem;color:var(--muted2);
}
.stock-dot{width:6px;height:6px;border-radius:50%}
.stock-in{background:var(--green)}
.stock-low{background:#FF9500}
.stock-out{background:var(--red)}
.add-btn{
  width:100%;padding:.6rem;
  background:var(--gold);color:#0A0A0F;
  border:none;border-radius:var(--r2);
  font-size:.78rem;font-weight:700;
  cursor:pointer;transition:background .2s,transform .15s;
  font-family:var(--f-body);
  display:flex;align-items:center;justify-content:center;gap:.4rem;
}
.add-btn:hover{background:var(--gold2);transform:scale(1.02)}
.add-btn:active{transform:scale(.98)}
.add-btn.added{background:var(--green);color:white}
.add-btn.out{background:var(--card2);color:var(--muted);cursor:not-allowed}

/* ─────────── QUANTITY SELECTOR ─────────── */
.qty-control{
  display:none;align-items:center;gap:0;
  border:1px solid var(--gold);border-radius:var(--r2);
  overflow:hidden;margin-bottom:.5rem;
}
.qty-control.show{display:flex}
.qty-btn{
  background:transparent;border:none;
  color:var(--gold);font-size:1.1rem;font-weight:700;
  width:36px;height:32px;cursor:pointer;
  transition:background .15s;
  font-family:var(--f-body);
}
.qty-btn:hover{background:rgba(245,166,35,.1)}
.qty-input{
  flex:1;background:transparent;border:none;
  text-align:center;color:var(--white);
  font-size:.85rem;font-weight:600;
  font-family:var(--f-body);
  padding:.2rem 0;outline:none;
  min-width:40px;
}

/* ─────────── DEALS ROW ─────────── */
.deals-row{
  display:flex;gap:1rem;overflow-x:auto;
  padding-bottom:.5rem;margin-bottom:2rem;
  scrollbar-width:none;
}
.deals-row::-webkit-scrollbar{display:none}
.deal-card{
  flex-shrink:0;width:280px;
  background:linear-gradient(135deg,var(--card),var(--card2));
  border:1px solid var(--border);border-radius:var(--r);
  padding:1.2rem;
  display:flex;gap:1rem;align-items:center;
  transition:border-color .25s,transform .25s;cursor:pointer;
}
.deal-card:hover{border-color:rgba(245,166,35,.3);transform:translateY(-2px)}
.deal-emoji{font-size:2.8rem;flex-shrink:0}
.deal-info{}
.deal-name{font-size:.85rem;font-weight:600;color:var(--white);margin-bottom:.3rem}
.deal-price-row{display:flex;align-items:center;gap:.5rem;margin-bottom:.4rem}
.deal-price{font-family:var(--f-head);font-size:1rem;font-weight:800;color:var(--gold)}
.deal-was{font-size:.72rem;color:var(--muted);text-decoration:line-through}
.deal-save{
  font-size:.62rem;background:rgba(0,196,140,.15);
  color:var(--green);padding:.15rem .45rem;border-radius:3px;font-weight:600;
}
.deal-stock{font-size:.68rem;color:var(--muted2)}

/* ─────────── BRAND STRIP ─────────── */
.brand-strip{
  display:flex;gap:1rem;overflow-x:auto;
  padding:.5rem 0 1rem;margin-bottom:1.5rem;
  scrollbar-width:none;
}
.brand-strip::-webkit-scrollbar{display:none}
.brand-chip{
  flex-shrink:0;
  background:var(--card);border:1px solid var(--border);
  border-radius:var(--r2);padding:.5rem 1.1rem;
  font-size:.75rem;font-weight:600;color:var(--muted2);
  cursor:pointer;transition:all .2s;
  display:flex;align-items:center;gap:.4rem;
}
.brand-chip:hover,.brand-chip.active{
  border-color:var(--gold);color:var(--gold);
  background:rgba(245,166,35,.05);
}
.brand-chip span{font-size:.9rem}

/* ─────────── CART PANEL ─────────── */
.cart-overlay{
  position:fixed;inset:0;z-index:200;
  background:rgba(0,0,0,.7);
  opacity:0;pointer-events:none;
  transition:opacity .3s;backdrop-filter:blur(4px);
}
.cart-overlay.open{opacity:1;pointer-events:all}
.cart-panel{
  position:fixed;right:0;top:0;bottom:0;
  width:min(420px,100vw);z-index:201;
  background:var(--surface);
  border-left:1px solid var(--border);
  display:flex;flex-direction:column;
  transform:translateX(100%);
  transition:transform .35s cubic-bezier(.16,1,.3,1);
  box-shadow:-20px 0 60px rgba(0,0,0,.5);
}
.cart-panel.open{transform:none}
.cart-header{
  padding:1.2rem 1.5rem;
  border-bottom:1px solid var(--border);
  display:flex;align-items:center;justify-content:space-between;
  flex-shrink:0;
}
.cart-title{
  font-family:var(--f-head);font-size:1.1rem;
  font-weight:800;color:var(--white);
  display:flex;align-items:center;gap:.5rem;
}
.cart-close{
  background:var(--card);border:1px solid var(--border);
  color:var(--muted2);width:32px;height:32px;
  border-radius:var(--r2);cursor:pointer;
  font-size:1rem;display:flex;align-items:center;justify-content:center;
  transition:color .2s,border-color .2s;
}
.cart-close:hover{color:var(--white);border-color:var(--border2)}
.cart-body{flex:1;overflow-y:auto;padding:1rem 1.5rem}
.cart-empty{
  text-align:center;padding:3rem 1rem;
  color:var(--muted);font-size:.88rem;
}
.cart-empty-icon{font-size:3rem;margin-bottom:1rem;opacity:.4}
.cart-item{
  display:flex;gap:.9rem;padding:1rem 0;
  border-bottom:1px solid var(--border);
  align-items:flex-start;
}
.cart-item-emoji{
  font-size:2rem;width:52px;height:52px;
  background:var(--card);border-radius:var(--r2);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.cart-item-info{flex:1;min-width:0}
.cart-item-name{
  font-size:.85rem;font-weight:600;color:var(--white);
  margin-bottom:.25rem;
  white-space:nowrap;overflow:hidden;text-overflow:ellipsis;
}
.cart-item-brand{font-size:.68rem;color:var(--gold);margin-bottom:.4rem}
.cart-item-meta{display:flex;align-items:center;gap:.6rem;flex-wrap:wrap}
.cart-item-qty{display:flex;align-items:center;gap:.3rem}
.ci-qty-btn{
  background:var(--card2);border:1px solid var(--border);
  color:var(--white);width:24px;height:24px;
  border-radius:4px;cursor:pointer;font-size:.85rem;
  display:flex;align-items:center;justify-content:center;
  transition:background .15s;
}
.ci-qty-btn:hover{background:var(--gold);color:#0A0A0F;border-color:var(--gold)}
.ci-qty-num{
  font-size:.8rem;font-weight:600;color:var(--white);
  min-width:24px;text-align:center;
}
.cart-item-price{
  font-family:var(--f-head);font-size:.95rem;
  font-weight:800;color:var(--gold);
}
.cart-item-remove{
  background:none;border:none;color:var(--muted);
  cursor:pointer;font-size:.9rem;padding:.2rem;
  transition:color .2s;
}
.cart-item-remove:hover{color:var(--red)}

/* Cart footer */
.cart-footer{
  padding:1.2rem 1.5rem;
  border-top:1px solid var(--border);
  flex-shrink:0;
}
.cart-retailer{margin-bottom:1rem}
.cart-retailer label{
  font-size:.72rem;color:var(--muted2);
  display:block;margin-bottom:.4rem;
  font-weight:500;letter-spacing:.04em;
}
.cart-retailer input{
  width:100%;background:var(--card);
  border:1px solid var(--border);border-radius:var(--r2);
  padding:.65rem .9rem;font-size:.85rem;
  color:var(--text);font-family:var(--f-body);outline:none;
  transition:border-color .2s;
}
.cart-retailer input:focus{border-color:rgba(245,166,35,.4)}
.cart-retailer input::placeholder{color:var(--muted)}
.cart-summary{margin-bottom:1rem}
.cs-row{
  display:flex;justify-content:space-between;
  font-size:.82rem;padding:.3rem 0;
  border-bottom:1px solid var(--border);
}
.cs-row:last-child{border:none}
.cs-row span:first-child{color:var(--muted2)}
.cs-row span:last-child{font-weight:600;color:var(--white)}
.cs-total span:last-child{
  font-family:var(--f-head);font-size:1.1rem;
  color:var(--gold);
}
.delivery-opts{margin-bottom:1rem}
.delivery-opts label{
  font-size:.72rem;color:var(--muted2);
  display:block;margin-bottom:.5rem;font-weight:500;
}
.d-opt{
  display:flex;align-items:center;gap:.6rem;
  padding:.55rem .8rem;background:var(--card);
  border:1px solid var(--border);border-radius:var(--r2);
  cursor:pointer;margin-bottom:.4rem;font-size:.8rem;
  transition:border-color .2s;
}
.d-opt input[type=radio]{accent-color:var(--gold)}
.d-opt:has(input:checked){border-color:rgba(245,166,35,.4)}
.wa-order-btn{
  width:100%;padding:.9rem;
  background:linear-gradient(135deg,#25D366,#128C7E);
  color:white;border:none;border-radius:var(--r);
  font-size:.95rem;font-weight:700;cursor:pointer;
  display:flex;align-items:center;justify-content:center;gap:.6rem;
  transition:transform .2s,box-shadow .2s;
  font-family:var(--f-body);
  box-shadow:0 8px 30px rgba(37,211,102,.3);
}
.wa-order-btn:hover{
  transform:translateY(-2px);
  box-shadow:0 14px 40px rgba(37,211,102,.45);
}
.wa-order-btn svg{width:20px;height:20px;fill:white}

/* ─────────── ORDER SUCCESS MODAL ─────────── */
.order-modal{
  position:fixed;inset:0;z-index:300;
  display:flex;align-items:center;justify-content:center;
  padding:1.5rem;
  background:rgba(0,0,0,.8);backdrop-filter:blur(8px);
  opacity:0;pointer-events:none;
  transition:opacity .3s;
}
.order-modal.show{opacity:1;pointer-events:all}
.order-modal-box{
  background:var(--surface);
  border:1px solid rgba(37,211,102,.3);
  border-radius:var(--r);
  padding:2.5rem 2rem;
  max-width:420px;width:100%;text-align:center;
  transform:scale(.9);transition:transform .35s cubic-bezier(.16,1,.3,1);
  box-shadow:0 0 60px rgba(37,211,102,.2);
}
.order-modal.show .order-modal-box{transform:scale(1)}
.om-icon{
  font-size:3.5rem;margin-bottom:.8rem;
  animation:omBounce .6s cubic-bezier(.36,.07,.19,.97) .1s both;
}
@keyframes omBounce{from{transform:scale(0) rotate(-180deg)}to{transform:scale(1) rotate(0)}}
.om-title{
  font-family:var(--f-head);font-size:1.4rem;
  font-weight:800;color:var(--white);margin-bottom:.4rem;
}
.om-sub{font-size:.85rem;color:var(--muted2);line-height:1.6;margin-bottom:1.5rem}
.om-wa-msg{
  background:var(--card);border-radius:var(--r2);
  padding:1rem;text-align:left;margin-bottom:1.5rem;
  border:1px solid rgba(37,211,102,.2);
}
.om-wa-label{
  font-size:.65rem;color:var(--green);
  font-weight:600;letter-spacing:.08em;margin-bottom:.5rem;
}
.om-wa-text{font-size:.78rem;color:var(--text);line-height:1.7;font-family:monospace}
.om-btn{
  width:100%;padding:.85rem;
  background:linear-gradient(135deg,#25D366,#128C7E);
  color:white;border:none;border-radius:var(--r2);
  font-size:.95rem;font-weight:700;cursor:pointer;
  display:flex;align-items:center;justify-content:center;gap:.55rem;
  transition:transform .2s;font-family:var(--f-body);
  margin-bottom:.6rem;
}
.om-btn:hover{transform:scale(1.02)}
.om-btn svg{width:18px;height:18px;fill:white}
.om-close-btn{
  background:none;border:1px solid var(--border);
  color:var(--muted2);border-radius:var(--r2);
  padding:.6rem 1.5rem;cursor:pointer;font-size:.82rem;
  font-family:var(--f-body);transition:border-color .2s,color .2s;
  width:100%;
}
.om-close-btn:hover{border-color:var(--border2);color:var(--white)}

/* ─────────── TOAST ─────────── */
.toast{
  position:fixed;bottom:2rem;left:50%;
  transform:translateX(-50%) translateY(100px);
  background:var(--card2);border:1px solid var(--border2);
  border-radius:50px;padding:.65rem 1.4rem;
  font-size:.82rem;font-weight:500;color:var(--white);
  z-index:400;transition:transform .3s cubic-bezier(.16,1,.3,1);
  display:flex;align-items:center;gap:.5rem;
  box-shadow:var(--shadow);
  white-space:nowrap;
}
.toast.show{transform:translateX(-50%) translateY(0)}
.toast-dot{width:7px;height:7px;border-radius:50%;background:var(--green)}

/* ─────────── INFO BANNER ─────────── */
.info-row{
  display:grid;grid-template-columns:repeat(3,1fr);
  gap:1rem;margin:1.5rem 0 2rem;
}
.info-card{
  background:var(--card);border:1px solid var(--border);
  border-radius:var(--r);padding:1.1rem;
  display:flex;align-items:flex-start;gap:.75rem;
}
.info-icon{font-size:1.5rem;flex-shrink:0;line-height:1}
.info-title{font-size:.8rem;font-weight:600;color:var(--white);margin-bottom:.25rem}
.info-desc{font-size:.72rem;color:var(--muted2);line-height:1.4}

/* ─────────── MARQUEE ─────────── */
.marquee-wrap{
  overflow:hidden;border-top:1px solid var(--border);
  border-bottom:1px solid var(--border);
  padding:.6rem 0;margin-bottom:2rem;
  background:var(--surface);
}
.marquee-track{
  display:flex;gap:3rem;
  animation:marquee 20s linear infinite;
  white-space:nowrap;
  width:max-content;
}
.marquee-track:hover{animation-play-state:paused}
@keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
.marquee-item{
  font-size:.72rem;color:var(--muted2);
  display:flex;align-items:center;gap:.5rem;
}
.marquee-item span.gold{color:var(--gold);font-weight:600}

/* ─────────── RESPONSIVE ─────────── */
@media(max-width:640px){
  .product-grid{grid-template-columns:repeat(2,1fr)}
  .info-row{grid-template-columns:1fr}
  .hero h1{font-size:1.6rem}
  .featured-banner{flex-direction:column;text-align:center}
  .fb-img{display:none}
  nav{padding:.8rem 1rem}
  .nav-phone{display:none}
}
@media(max-width:380px){
  .product-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>

<!-- Top banner -->
<div class="top-banner">📦 Free delivery on orders over £500 &nbsp;·&nbsp; Same day dispatch before 2pm &nbsp;·&nbsp; WhatsApp orders welcome: +44 7700 900 360</div>

<!-- Navbar -->
<nav>
  <a class="nav-logo" href="#">
    <div class="nav-logo-dot"></div>
    PhoneHub
  </a>
  <div class="nav-search">
    <span class="nav-search-icon">🔍</span>
    <input type="text" id="searchInput" placeholder="Search iPhone cases, Samsung, chargers..." oninput="filterProducts()">
  </div>
  <div class="nav-right">
    <div class="nav-phone">📞 +44 7700 900 360</div>
    <button class="cart-btn" onclick="toggleCart()">
      🛒 Cart
      <span class="cart-count" id="cartCount" style="display:none">0</span>
    </button>
  </div>
</nav>

<!-- Hero -->
<div class="hero">
  <div class="hero-bg"></div>
  <div class="hero-tag">✦ Charles House, Southall — Wholesale Only</div>
  <h1>Mobile & Accessories<br><span>Wholesale Portal</span></h1>
  <p class="hero-sub">Browse 500+ products. Add to cart. Your order lands on our WhatsApp instantly. We dispatch same day.</p>
  <div class="hero-stats">
    <div class="h-stat"><div class="h-stat-val">500+</div><div class="h-stat-lbl">Products in stock</div></div>
    <div class="h-stat"><div class="h-stat-val">24/7</div><div class="h-stat-lbl">Portal open</div></div>
    <div class="h-stat"><div class="h-stat-val">UK-wide</div><div class="h-stat-lbl">Delivery</div></div>
    <div class="h-stat"><div class="h-stat-val">MOQ 10</div><div class="h-stat-lbl">Minimum order</div></div>
  </div>
</div>

<!-- Marquee -->
<div class="marquee-wrap">
  <div class="marquee-track" id="marqueeTrack">
    <span class="marquee-item">📱 iPhone 16 cases back in stock <span class="gold">NEW</span></span>
    <span class="marquee-item">🔌 USB-C 65W chargers — bulk discount available</span>
    <span class="marquee-item">🛡 Samsung S25 screen protectors just landed <span class="gold">HOT</span></span>
    <span class="marquee-item">🎧 Wireless earbuds — 200 units available</span>
    <span class="marquee-item">⚡ Lightning cables — buy 100 get 10 free <span class="gold">DEAL</span></span>
    <span class="marquee-item">📦 Free delivery on orders £500+ across the UK</span>
    <span class="marquee-item">📱 iPhone 16 cases back in stock <span class="gold">NEW</span></span>
    <span class="marquee-item">🔌 USB-C 65W chargers — bulk discount available</span>
    <span class="marquee-item">🛡 Samsung S25 screen protectors just landed <span class="gold">HOT</span></span>
    <span class="marquee-item">🎧 Wireless earbuds — 200 units available</span>
    <span class="marquee-item">⚡ Lightning cables — buy 100 get 10 free <span class="gold">DEAL</span></span>
    <span class="marquee-item">📦 Free delivery on orders £500+ across the UK</span>
  </div>
</div>

<!-- Category bar -->
<div class="cat-bar" id="catBar">
  <div class="cat-pill active" onclick="filterCat('all',this)">All Products</div>
  <div class="cat-pill" onclick="filterCat('cases',this)">📱 Cases & Covers</div>
  <div class="cat-pill" onclick="filterCat('chargers',this)">🔌 Chargers & Cables</div>
  <div class="cat-pill" onclick="filterCat('screen',this)">🛡 Screen Protectors</div>
  <div class="cat-pill" onclick="filterCat('audio',this)">🎧 Audio</div>
  <div class="cat-pill" onclick="filterCat('power',this)">🔋 Power Banks</div>
  <div class="cat-pill" onclick="filterCat('parts',this)">🔧 Screens & Parts</div>
  <div class="cat-pill" onclick="filterCat('accessories',this)">💡 Accessories</div>
</div>

<!-- Main content -->
<div class="main">

  <!-- Featured banner -->
  <div class="featured-banner">
    <div class="fb-left">
      <h2>🔥 This Week's Hot Stock</h2>
      <p>iPhone 16 Pro Max cases — 3 colours in. Samsung S25 screen protectors arrived today. Order before 2pm for same-day dispatch.</p>
      <div class="fb-badge">
        <span class="fb-b">✓ In Stock Now</span>
        <span class="fb-b">📦 Same Day Dispatch</span>
        <span class="fb-b">🇬🇧 UK-wide Delivery</span>
      </div>
    </div>
    <div class="fb-img">📱</div>
  </div>

  <!-- Brand strip -->
  <div class="section-head">
    <div class="section-title">Shop by Brand</div>
  </div>
  <div class="brand-strip">
    <div class="brand-chip active" onclick="filterBrand('all',this)"><span>📱</span> All Brands</div>
    <div class="brand-chip" onclick="filterBrand('Apple',this)"><span>🍎</span> Apple</div>
    <div class="brand-chip" onclick="filterBrand('Samsung',this)"><span>📲</span> Samsung</div>
    <div class="brand-chip" onclick="filterBrand('Xiaomi',this)"><span>🔴</span> Xiaomi</div>
    <div class="brand-chip" onclick="filterBrand('OnePlus',this)"><span>1️⃣</span> OnePlus</div>
    <div class="brand-chip" onclick="filterBrand('Generic',this)"><span>⭐</span> Generic</div>
    <div class="brand-chip" onclick="filterBrand('Anker',this)"><span>⚡</span> Anker</div>
  </div>

  <!-- Flash deals -->
  <div class="section-head">
    <div class="section-title">⚡ Flash Deals</div>
    <span class="section-see-all">View all deals</span>
  </div>
  <div class="deals-row" id="dealsRow"></div>

  <!-- Info cards -->
  <div class="info-row">
    <div class="info-card">
      <div class="info-icon">💬</div>
      <div><div class="info-title">Order on WhatsApp</div><div class="info-desc">Add to cart, checkout — your order lands on our WhatsApp instantly. We confirm within minutes.</div></div>
    </div>
    <div class="info-card">
      <div class="info-icon">🚚</div>
      <div><div class="info-title">3 Delivery Options</div><div class="info-desc">We deliver · You collect from Southall · Royal Mail tracked. Your choice at checkout.</div></div>
    </div>
    <div class="info-card">
      <div class="info-icon">💷</div>
      <div><div class="info-title">Bank Transfer / COD</div><div class="info-desc">Pay by bank transfer or cash on delivery. No card fees. Simple. Trusted.</div></div>
    </div>
  </div>

  <!-- Products -->
  <div class="section-head">
    <div class="section-title">All Products</div>
    <span class="section-see-all" id="productCount">Loading...</span>
  </div>
  <div class="product-grid" id="productGrid"></div>

</div>

<!-- Cart panel -->
<div class="cart-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<div class="cart-panel" id="cartPanel">
  <div class="cart-header">
    <div class="cart-title">🛒 Your Order</div>
    <button class="cart-close" onclick="toggleCart()">✕</button>
  </div>
  <div class="cart-body" id="cartBody">
    <div class="cart-empty">
      <div class="cart-empty-icon">🛒</div>
      Your cart is empty.<br>Add products to start your order.
    </div>
  </div>
  <div class="cart-footer">
    <div class="cart-retailer">
      <label>YOUR SHOP NAME / CONTACT</label>
      <input type="text" id="retailerName" placeholder="e.g. Ali Mobile Shop, Leeds">
    </div>
    <div class="delivery-opts">
      <label>DELIVERY OPTION</label>
      <div class="d-opt"><input type="radio" name="delivery" value="deliver" checked> 🚚 We deliver to your address</div>
      <div class="d-opt"><input type="radio" name="delivery" value="collect"> 🏪 I will collect from Southall</div>
      <div class="d-opt"><input type="radio" name="delivery" value="royal-mail"> 📮 Royal Mail tracked post</div>
    </div>
    <div class="cart-summary" id="cartSummary"></div>
    <button class="wa-order-btn" onclick="placeOrder()">
      <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Send Order via WhatsApp
    </button>
  </div>
</div>

<!-- Order success modal -->
<div class="order-modal" id="orderModal">
  <div class="order-modal-box">
    <div class="om-icon">✅</div>
    <div class="om-title">Order Ready!</div>
    <div class="om-sub">Your order summary is ready. Press the button below to send it directly to our WhatsApp. We will confirm and dispatch within the hour.</div>
    <div class="om-wa-msg">
      <div class="om-wa-label">📱 WHATSAPP MESSAGE PREVIEW</div>
      <div class="om-wa-text" id="waPreview"></div>
    </div>
    <button class="om-btn" id="omSendBtn">
      <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Open WhatsApp & Send Order
    </button>
    <button class="om-close-btn" onclick="closeModal()">Continue Shopping</button>
  </div>
</div>

<!-- Toast -->
<div class="toast" id="toast">
  <div class="toast-dot"></div>
  <span id="toastMsg">Added to cart</span>
</div>

<script>
// ═══════════════════════════════════════════════════════
// PRODUCT DATA — 40 real mobile & accessories products
// ═══════════════════════════════════════════════════════
const SHOP_WA = '447700900360'; // ← CHANGE THIS to the wholesaler's number

const PRODUCTS = [
  // CASES & COVERS
  {id:1,  emoji:'📱', brand:'Apple',   name:'iPhone 16 Pro Max Clear Case',      cat:'cases',    price:1.40, moq:10,  stock:320, badge:'hot',  desc:'Crystal clear TPU. Anti-yellow.'},
  {id:2,  emoji:'📱', brand:'Apple',   name:'iPhone 16 Silicone Case (Black)',    cat:'cases',    price:1.55, moq:10,  stock:180, badge:'new',  desc:'Premium silicone, full protection.'},
  {id:3,  emoji:'📱', brand:'Apple',   name:'iPhone 15 Pro Clear Case',           cat:'cases',    price:1.20, moq:10,  stock:250, badge:null,   desc:'Shock-absorbing corners.'},
  {id:4,  emoji:'📱', brand:'Apple',   name:'iPhone 15 Leather-Style Case',       cat:'cases',    price:1.80, moq:10,  stock:95,  badge:null,   desc:'Premium PU leather finish.'},
  {id:5,  emoji:'📲', brand:'Samsung', name:'Samsung S25 Ultra Clear Case',       cat:'cases',    price:1.30, moq:10,  stock:210, badge:'new',  desc:'Military-grade drop protection.'},
  {id:6,  emoji:'📲', brand:'Samsung', name:'Samsung A55 Shockproof Case',        cat:'cases',    price:0.95, moq:20,  stock:18,  badge:'low',  desc:'Dual layer protection.'},
  {id:7,  emoji:'📲', brand:'Samsung', name:'Samsung S24 Wallet Case',            cat:'cases',    price:2.10, moq:10,  stock:140, badge:null,   desc:'3 card slots. Magnetic closure.'},
  {id:8,  emoji:'🔴', brand:'Xiaomi',  name:'Xiaomi 14 Pro Clear Case',           cat:'cases',    price:0.85, moq:20,  stock:300, badge:'sale', desc:'Slim fit. Crystal clear.'},
  {id:9,  emoji:'1️⃣', brand:'OnePlus', name:'OnePlus 12 Carbon Fibre Case',      cat:'cases',    price:1.60, moq:10,  stock:80,  badge:null,   desc:'Lightweight carbon pattern.'},
  // CHARGERS & CABLES
  {id:10, emoji:'🔌', brand:'Generic', name:'USB-C Fast Charger 65W (UK Plug)',   cat:'chargers', price:3.80, moq:10,  stock:200, badge:'hot',  desc:'65W GaN. Universal compatibility.'},
  {id:11, emoji:'🔌', brand:'Generic', name:'USB-C Cable 1m (Pack of 5)',          cat:'chargers', price:2.50, moq:5,   stock:350, badge:null,   desc:'60W fast charge. Braided nylon.'},
  {id:12, emoji:'⚡', brand:'Anker',   name:'Anker 20W USB-C Charger',            cat:'chargers', price:4.20, moq:5,   stock:120, badge:null,   desc:'PowerIQ 3.0. Foldable plug.'},
  {id:13, emoji:'🔌', brand:'Apple',   name:'Lightning Cable 1m',                 cat:'chargers', price:1.60, moq:20,  stock:8,   badge:'low',  desc:'MFi certified. Fast charge.'},
  {id:14, emoji:'🔌', brand:'Apple',   name:'Lightning Cable 2m',                 cat:'chargers', price:2.10, moq:10,  stock:55,  badge:null,   desc:'Durable braided design.'},
  {id:15, emoji:'🔌', brand:'Generic', name:'Wireless Charging Pad 15W',          cat:'chargers', price:3.20, moq:10,  stock:90,  badge:'new',  desc:'Qi compatible. LED indicator.'},
  {id:16, emoji:'⚡', brand:'Generic', name:'4-Port USB Wall Charger 65W',        cat:'chargers', price:5.50, moq:5,   stock:75,  badge:null,   desc:'2x USB-A + 2x USB-C output.'},
  {id:17, emoji:'🔌', brand:'Samsung', name:'Samsung 25W Fast Charger EP-TA800',  cat:'chargers', price:4.80, moq:5,   stock:60,  badge:null,   desc:'Original Samsung. Super Fast Charge.'},
  // SCREEN PROTECTORS
  {id:18, emoji:'🛡', brand:'Apple',   name:'iPhone 16 Pro Max Tempered Glass',   cat:'screen',   price:0.90, moq:20,  stock:800, badge:'hot',  desc:'9H hardness. Full coverage.'},
  {id:19, emoji:'🛡', brand:'Apple',   name:'iPhone 15 Pro Screen Protector',     cat:'screen',   price:0.80, moq:20,  stock:650, badge:null,   desc:'Anti-fingerprint coating.'},
  {id:20, emoji:'🛡', brand:'Samsung', name:'Samsung S25 Ultra Tempered Glass',   cat:'screen',   price:0.95, moq:20,  stock:300, badge:'new',  desc:'Case-friendly. 2.5D curved edge.'},
  {id:21, emoji:'🛡', brand:'Samsung', name:'Samsung A55 Privacy Screen Protector',cat:'screen',  price:1.10, moq:10,  stock:0,   badge:null,   desc:'Anti-spy 180° privacy filter.'},
  {id:22, emoji:'🛡', brand:'Generic', name:'Universal Privacy Filter 6.1"',      cat:'screen',   price:0.75, moq:20,  stock:500, badge:'sale', desc:'Universal fit for 6.1" screens.'},
  // AUDIO
  {id:23, emoji:'🎧', brand:'Generic', name:'TWS Wireless Earbuds (ANC)',         cat:'audio',    price:7.20, moq:5,   stock:0,   badge:null,   desc:'Active noise cancellation. 24hr battery.'},
  {id:24, emoji:'🎧', brand:'Generic', name:'Wired Earphones USB-C',              cat:'audio',    price:2.40, moq:10,  stock:180, badge:null,   desc:'Hi-Fi stereo. Tangle-free cable.'},
  {id:25, emoji:'🔊', brand:'Generic', name:'Portable Bluetooth Speaker 10W',     cat:'audio',    price:8.50, moq:5,   stock:65,  badge:null,   desc:'IPX5 waterproof. 8hr playtime.'},
  {id:26, emoji:'🎧', brand:'Generic', name:'3.5mm In-Ear Earphones (Budget)',    cat:'audio',    price:0.90, moq:50,  stock:400, badge:'sale', desc:'Universal 3.5mm. Bass boost.'},
  // POWER BANKS
  {id:27, emoji:'🔋', brand:'Generic', name:'20000mAh Power Bank Slim',           cat:'power',    price:14.50,moq:5,   stock:85,  badge:null,   desc:'Dual USB + USB-C. LED indicator.'},
  {id:28, emoji:'🔋', brand:'Generic', name:'10000mAh Power Bank Ultra Slim',     cat:'power',    price:9.80, moq:5,   stock:120, badge:'hot',  desc:'Fast charge 22.5W. Pocket size.'},
  {id:29, emoji:'🔋', brand:'Anker',   name:'Anker PowerCore 10000',              cat:'power',    price:16.50,moq:3,   stock:40,  badge:null,   desc:'MultiProtect safety. Compact.'},
  {id:30, emoji:'🔋', brand:'Generic', name:'MagSafe Power Bank 5000mAh',        cat:'power',    price:11.20,moq:5,   stock:55,  badge:'new',  desc:'Magnetic. For iPhone 12-16.'},
  // SCREENS & PARTS
  {id:31, emoji:'📺', brand:'Apple',   name:'iPhone 15 OLED Screen Assembly',    cat:'parts',    price:45.00,moq:1,   stock:22,  badge:null,   desc:'OEM quality OLED. Touch included.'},
  {id:32, emoji:'📺', brand:'Apple',   name:'iPhone 14 LCD Screen Assembly',     cat:'parts',    price:28.00,moq:1,   stock:35,  badge:'sale', desc:'High brightness LCD panel.'},
  {id:33, emoji:'📺', brand:'Samsung', name:'Samsung S24 OLED Screen Assembly',  cat:'parts',    price:52.00,moq:1,   stock:14,  badge:null,   desc:'Original Samsung OLED.'},
  {id:34, emoji:'🔋', brand:'Apple',   name:'iPhone 15 Battery (OEM Grade)',      cat:'parts',    price:14.50,moq:5,   stock:45,  badge:null,   desc:'3400mAh. OEM quality.'},
  {id:35, emoji:'🔋', brand:'Samsung', name:'Samsung S24 Battery Replacement',    cat:'parts',    price:12.00,moq:5,   stock:30,  badge:null,   desc:'3900mAh. Original grade.'},
  // ACCESSORIES
  {id:36, emoji:'💡', brand:'Generic', name:'Phone Stand Adjustable Desktop',    cat:'accessories',price:2.20,moq:10, stock:160, badge:null,   desc:'360° rotation. Foldable.'},
  {id:37, emoji:'🔒', brand:'Generic', name:'Phone Ring Holder (10 colours)',    cat:'accessories',price:0.60,moq:50, stock:500, badge:'sale', desc:'360° kickstand. Universal.'},
  {id:38, emoji:'🧴', brand:'Generic', name:'Screen Cleaning Kit (Spray + Cloth)',cat:'accessories',price:1.10,moq:20,stock:220, badge:null,   desc:'Streak-free formula.'},
  {id:39, emoji:'📦', brand:'Generic', name:'Retail Display Stand (20 hooks)',   cat:'accessories',price:18.00,moq:1, stock:30,  badge:null,   desc:'Countertop display for cases.'},
  {id:40, emoji:'🔗', brand:'Generic', name:'USB Cable Management Clips (20pk)', cat:'accessories',price:1.80,moq:10, stock:300, badge:null,   desc:'Self-adhesive. Various colours.'},
];

// Flash deals (subset with discounts)
const DEALS = [
  {id:13, was:2.20, save:'27%'},
  {id:6,  was:1.40, save:'32%'},
  {id:22, was:1.10, save:'32%'},
  {id:26, was:1.50, save:'40%'},
  {id:37, was:0.95, save:'37%'},
  {id:32, was:38.00,save:'26%'},
];

// ═══════════════════════════════════════════════════════
// CART STATE
// ═══════════════════════════════════════════════════════
let cart = {};
let currentCat = 'all';
let currentBrand = 'all';
let currentSearch = '';
let waUrl = '';

// ═══════════════════════════════════════════════════════
// RENDER PRODUCTS
// ═══════════════════════════════════════════════════════
function renderProducts() {
  const grid = document.getElementById('productGrid');
  const filtered = PRODUCTS.filter(p => {
    const catOk  = currentCat === 'all' || p.cat === currentCat;
    const brandOk= currentBrand === 'all' || p.brand === currentBrand;
    const searchOk= !currentSearch || p.name.toLowerCase().includes(currentSearch) || p.brand.toLowerCase().includes(currentSearch);
    return catOk && brandOk && searchOk;
  });

  document.getElementById('productCount').textContent = filtered.length + ' products';

  grid.innerHTML = filtered.map(p => {
    const inCart = cart[p.id] && cart[p.id].qty > 0;
    const outOfStock = p.stock === 0;
    const lowStock = p.stock > 0 && p.stock < 20;
    const stockClass = outOfStock ? 'stock-out' : lowStock ? 'stock-low' : 'stock-in';
    const stockLabel = outOfStock ? 'Out of stock' : lowStock ? `Low stock (${p.stock} left)` : `In stock (${p.stock}+)`;
    const badge = p.badge ? `<span class="product-badge badge-${p.badge}">${p.badge}</span>` : '';
    const cartQty = inCart ? cart[p.id].qty : p.moq;

    return `
    <div class="product-card" id="card-${p.id}">
      ${badge}
      <div class="product-img">${p.emoji}</div>
      <div class="product-info">
        <div class="product-brand">${p.brand}</div>
        <div class="product-name">${p.name}</div>
        <div class="product-meta">
          <div>
            <span class="product-price">£${p.price.toFixed(2)}</span>
            <span class="product-unit">/unit</span>
          </div>
          <span class="product-moq">MOQ: ${p.moq}</span>
        </div>
        <div class="product-stock">
          <div class="stock-dot ${stockClass}"></div>
          ${stockLabel}
        </div>
        ${!outOfStock ? `
        <div class="qty-control ${inCart?'show':''}" id="qty-${p.id}">
          <button class="qty-btn" onclick="changeQty(${p.id},-${p.moq})">−</button>
          <input class="qty-input" type="number" id="qtyval-${p.id}" value="${cartQty}" min="${p.moq}" step="${p.moq}" onchange="setQty(${p.id},this.value)">
          <button class="qty-btn" onclick="changeQty(${p.id},${p.moq})">+</button>
        </div>
        <button class="add-btn ${inCart?'added':''}" id="addbtn-${p.id}" onclick="addToCart(${p.id})" ${outOfStock?'disabled':''}>
          ${inCart ? '✓ In Order — Update' : '+ Add to Order'}
        </button>` : `
        <button class="add-btn out" disabled>Out of Stock</button>`}
      </div>
    </div>`;
  }).join('');
}

// ═══════════════════════════════════════════════════════
// RENDER DEALS
// ═══════════════════════════════════════════════════════
function renderDeals() {
  const row = document.getElementById('dealsRow');
  row.innerHTML = DEALS.map(d => {
    const p = PRODUCTS.find(x => x.id === d.id);
    if(!p) return '';
    return `
    <div class="deal-card" onclick="addToCart(${p.id}); showToast('${p.name.substring(0,25)} added!')">
      <div class="deal-emoji">${p.emoji}</div>
      <div class="deal-info">
        <div class="deal-name">${p.name}</div>
        <div class="deal-price-row">
          <span class="deal-price">£${p.price.toFixed(2)}</span>
          <span class="deal-was">£${d.was.toFixed(2)}</span>
          <span class="deal-save">SAVE ${d.save}</span>
        </div>
        <div class="deal-stock">MOQ: ${p.moq} · ${p.stock > 0 ? p.stock+' in stock' : 'Out of stock'}</div>
      </div>
    </div>`;
  }).join('');
}

// ═══════════════════════════════════════════════════════
// CART OPERATIONS
// ═══════════════════════════════════════════════════════
function addToCart(id) {
  const p = PRODUCTS.find(x => x.id === id);
  if(!p || p.stock === 0) return;
  if(!cart[id]) { cart[id] = { product: p, qty: p.moq }; }
  else { cart[id].qty += p.moq; }
  updateCartUI();
  showQtyControl(id);
  showToast(`${p.name.substring(0,30)}... added! (${cart[id].qty} units)`);
  updateProductCard(id);
}

function changeQty(id, delta) {
  const p = PRODUCTS.find(x => x.id === id);
  if(!cart[id]) { cart[id] = { product: p, qty: p.moq }; }
  const newQty = Math.max(p.moq, (cart[id].qty || p.moq) + delta);
  cart[id].qty = newQty;
  const el = document.getElementById('qtyval-'+id);
  if(el) el.value = newQty;
  updateCartUI();
  updateProductCard(id);
}

function setQty(id, val) {
  const p = PRODUCTS.find(x => x.id === id);
  const qty = Math.max(p.moq, parseInt(val) || p.moq);
  if(!cart[id]) cart[id] = { product: p, qty };
  else cart[id].qty = qty;
  updateCartUI();
}

function removeFromCart(id) {
  delete cart[id];
  updateCartUI();
  renderProducts();
}

function changeCartQty(id, delta) {
  if(!cart[id]) return;
  const p = cart[id].product;
  const newQty = cart[id].qty + delta;
  if(newQty < p.moq) { removeFromCart(id); return; }
  cart[id].qty = newQty;
  updateCartUI();
}

function showQtyControl(id) {
  const qc = document.getElementById('qty-'+id);
  const btn = document.getElementById('addbtn-'+id);
  const inp = document.getElementById('qtyval-'+id);
  if(qc) qc.classList.add('show');
  if(btn) { btn.classList.add('added'); btn.textContent = '✓ In Order — Update'; }
  if(inp && cart[id]) inp.value = cart[id].qty;
}

function updateProductCard(id) {
  const btn = document.getElementById('addbtn-'+id);
  const qc  = document.getElementById('qty-'+id);
  const inp = document.getElementById('qtyval-'+id);
  if(cart[id]) {
    if(btn) { btn.classList.add('added'); btn.textContent = '✓ In Order — Update'; }
    if(qc)  qc.classList.add('show');
    if(inp) inp.value = cart[id].qty;
  }
}

function updateCartUI() {
  const items = Object.values(cart).filter(i => i.qty > 0);
  const total = items.reduce((s,i) => s + i.product.price * i.qty, 0);
  const totalQty = items.reduce((s,i) => s + i.qty, 0);

  // Count badge
  const countEl = document.getElementById('cartCount');
  if(totalQty > 0) {
    countEl.style.display = 'flex';
    countEl.textContent = totalQty;
    countEl.style.animation = 'none';
    setTimeout(()=>{ countEl.style.animation='bounce .3s cubic-bezier(.36,.07,.19,.97) both'; },10);
  } else {
    countEl.style.display = 'none';
  }

  // Cart body
  const body = document.getElementById('cartBody');
  if(items.length === 0) {
    body.innerHTML = `<div class="cart-empty"><div class="cart-empty-icon">🛒</div>Your cart is empty.<br>Add products to start your order.</div>`;
  } else {
    body.innerHTML = items.map(item => `
    <div class="cart-item">
      <div class="cart-item-emoji">${item.product.emoji}</div>
      <div class="cart-item-info">
        <div class="cart-item-brand">${item.product.brand}</div>
        <div class="cart-item-name">${item.product.name}</div>
        <div class="cart-item-meta">
          <div class="cart-item-qty">
            <button class="ci-qty-btn" onclick="changeCartQty(${item.product.id},-${item.product.moq})">−</button>
            <span class="ci-qty-num">${item.qty}</span>
            <button class="ci-qty-btn" onclick="changeCartQty(${item.product.id},${item.product.moq})">+</button>
          </div>
          <span class="cart-item-price">£${(item.product.price * item.qty).toFixed(2)}</span>
        </div>
      </div>
      <button class="cart-item-remove" onclick="removeFromCart(${item.product.id})">✕</button>
    </div>`).join('');
  }

  // Summary
  const delivery = document.querySelector('input[name="delivery"]:checked');
  const deliveryLabel = delivery ? delivery.value : 'deliver';
  const deliveryText = deliveryLabel === 'deliver' ? 'We deliver' : deliveryLabel === 'collect' ? 'Collection from Southall' : 'Royal Mail';
  const vat = total * 0.2;

  document.getElementById('cartSummary').innerHTML = items.length > 0 ? `
  <div class="cs-row"><span>Subtotal (${totalQty} units)</span><span>£${total.toFixed(2)}</span></div>
  <div class="cs-row"><span>VAT (20%)</span><span>£${vat.toFixed(2)}</span></div>
  <div class="cs-row"><span>Delivery</span><span>TBC on confirmation</span></div>
  <div class="cs-row cs-total"><span><strong>Order Total</strong></span><span>£${(total+vat).toFixed(2)}</span></div>` : '';
}

// ═══════════════════════════════════════════════════════
// CART TOGGLE
// ═══════════════════════════════════════════════════════
function toggleCart() {
  document.getElementById('cartOverlay').classList.toggle('open');
  document.getElementById('cartPanel').classList.toggle('open');
  updateCartUI();
}

// ═══════════════════════════════════════════════════════
// PLACE ORDER → WHATSAPP
// ═══════════════════════════════════════════════════════
function placeOrder() {
  const items = Object.values(cart).filter(i => i.qty > 0);
  if(items.length === 0) { showToast('Add items to your order first'); return; }

  const name   = document.getElementById('retailerName').value.trim() || 'A retailer';
  const delivery = document.querySelector('input[name="delivery"]:checked');
  const deliveryVal = delivery ? delivery.value : 'deliver';
  const deliveryText = deliveryVal === 'deliver' ? '🚚 Deliver to my address' : deliveryVal === 'collect' ? '🏪 I will collect from Southall' : '📮 Royal Mail tracked post';
  const total  = items.reduce((s,i) => s + i.product.price * i.qty, 0);
  const vat    = total * 0.2;
  const date   = new Date().toLocaleDateString('en-GB', {day:'numeric',month:'short',year:'numeric'});
  const time   = new Date().toLocaleTimeString('en-GB', {hour:'2-digit',minute:'2-digit'});

  // Build message
  let msg = `🛒 *NEW WHOLESALE ORDER*\n`;
  msg += `━━━━━━━━━━━━━━━━━━━━\n`;
  msg += `📅 ${date} at ${time}\n`;
  msg += `🏪 *From:* ${name}\n`;
  msg += `━━━━━━━━━━━━━━━━━━━━\n\n`;
  msg += `*ORDER ITEMS:*\n`;
  items.forEach((item, i) => {
    const subtotal = (item.product.price * item.qty).toFixed(2);
    msg += `${i+1}. ${item.product.emoji} *${item.product.name}*\n`;
    msg += `   Brand: ${item.product.brand}\n`;
    msg += `   Qty: ${item.qty} units @ £${item.product.price.toFixed(2)} each\n`;
    msg += `   Subtotal: £${subtotal}\n\n`;
  });
  msg += `━━━━━━━━━━━━━━━━━━━━\n`;
  msg += `💰 *Subtotal:* £${total.toFixed(2)}\n`;
  msg += `🧾 *VAT (20%):* £${vat.toFixed(2)}\n`;
  msg += `💷 *ORDER TOTAL: £${(total+vat).toFixed(2)}*\n\n`;
  msg += `📦 *Delivery:* ${deliveryText}\n`;
  msg += `💳 *Payment:* Bank transfer / COD\n\n`;
  msg += `Please confirm this order and send delivery details. Thank you!`;

  // Show preview in modal
  document.getElementById('waPreview').textContent = msg.substring(0, 400) + (msg.length > 400 ? '...' : '');

  // Build WA URL
  waUrl = `https://wa.me/${SHOP_WA}?text=${encodeURIComponent(msg)}`;

  // Set button
  document.getElementById('omSendBtn').onclick = () => {
    window.open(waUrl, '_blank');
    setTimeout(() => {
      cart = {};
      updateCartUI();
      closeModal();
      toggleCart();
      renderProducts();
      showToast('Order sent! We will confirm shortly ✓');
    }, 800);
  };

  // Show modal
  document.getElementById('orderModal').classList.add('show');
  document.getElementById('cartPanel').classList.remove('open');
  document.getElementById('cartOverlay').classList.remove('open');
}

function closeModal() {
  document.getElementById('orderModal').classList.remove('show');
}

// ═══════════════════════════════════════════════════════
// FILTERS
// ═══════════════════════════════════════════════════════
function filterCat(cat, el) {
  currentCat = cat;
  document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
  el.classList.add('active');
  renderProducts();
}

function filterBrand(brand, el) {
  currentBrand = brand;
  document.querySelectorAll('.brand-chip').forEach(c => c.classList.remove('active'));
  el.classList.add('active');
  renderProducts();
}

function filterProducts() {
  currentSearch = document.getElementById('searchInput').value.toLowerCase().trim();
  renderProducts();
}

// ═══════════════════════════════════════════════════════
// TOAST
// ═══════════════════════════════════════════════════════
let toastTimer;
function showToast(msg) {
  const t = document.getElementById('toast');
  const m = document.getElementById('toastMsg');
  m.textContent = msg;
  t.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => t.classList.remove('show'), 2800);
}

// ═══════════════════════════════════════════════════════
// INIT
// ═══════════════════════════════════════════════════════
renderProducts();
renderDeals();
updateCartUI();

// Close modal on overlay click
document.getElementById('orderModal').addEventListener('click', function(e) {
  if(e.target === this) closeModal();
});

// Delivery option updates cart summary
document.querySelectorAll('input[name="delivery"]').forEach(r => {
  r.addEventListener('change', updateCartUI);
});
</script>
</body>
</html>
