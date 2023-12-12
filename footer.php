    <footer>
      <div class="f_top">
        <nav class="f_nav">
          <a href="a.html" title="개인정보처리방침">
            개인정보처리방침 
          </a>
          <a href="b.html" title="쇼핑몰 이용약관">
            쇼핑몰이용약관
          </a>
        </nav>
        <dl>
          <dt>공지사항</dt>
          <dd><a href="#" title="지니펫">지니펫X한국헌혈견협회'건강한' 밤이보약 상품출시</a></dd>
          <dd><span class="date">2021-03-05</span></dd>
        </dl>
      </div>

      <div class="f_bottom">
        <ul>
          <li class="info">
            <dl>
              <dt>주문배송 및 문의</dt>
              <dd class="tel">02-2189-6543</dd>
              <dd>평일 10:00 ~ 17:00 <br> (점심:12시 ~ 13시)</dd>
            </dl>          
            </li>
          <li class="info">
            <dl>
              <dt>고객센터</dt>
              <dd class="tel">080-250-2304</dd>
              <dd>평일 10:00 ~ 17:00 <br> (점심:12시 ~ 13시)</dd>
            </dl>
            </li>
          <li>            
            <a href="#" title="인스타">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" title="블로그">
              <i class="fab fa-brands fa-blogger"></i>
            </a>
            <a href="#" title="페이스북">
              <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li>
            <select onchange="siteUrl(this);">
              <option value="">Family Site</option>
              <option value="http://www.harim.com/">(주)하림</option>
              <option value="http://www.harimmarket.com/">하림몰</option>
              <option value="http://www.sjporkmall.com/">팜스코</option>
              <option value="http://www.orimart.co.kr/">주원산오리</option>
              <option value="http://www.nseshop.com/">NS홈쇼핑</option>
              <option value="http://www.mexican.co.kr/">맥시칸치킨</option>
              <option value="http://www.ddck.co.kr//">디디치킨</option>
            </select>
          </li>
        </ul>
        <address>
            <p>대전광역시 대덕구 벗꽃길71(평촌동)&#65372; 상호 및 대표자 : (주)한국인삼공사
            000 &#124; 사업자번호 : <span class="tel02">000-00-00000</span> &#124; 통신판매업신고번호 : 제0000-대전대덕
            사업자정보확인 &#124; 호스팅서비스 제공자 : (주)한국인삼공사 Email : ginipet@kgc.co.kr Copyright&copy;2018 by koreaginseng corp. all rights reserved.
            구매안전(에스크로)서비스 가입하실 확인 고객님은 안전거래를 위해 현금등으로 결제시 저희 쇼핑몰에 가입한 KCP의 구매안전서비스를 이용하실 수 있습니다.</p>
        </address>
      </div>
    </footer>

    <script>
      function siteUrl(a){
        // alert('선택했음')
        if(a.value!='none'){//옵션을 선택하면
        // != : 같지않다
        window.open(a.value,'_self');
        //_self : 이 페이지에서 열기, 빼면 새창에서 열기
      }else{
        return;
      }
      }

      // 로그인 아이디, 패스워드 체크하기
      // 사용자가 아이디, 패스워드 입력하면 맞았는지 틀렸는지 체크하여 결과 화면에 알려주기
      // 1. 사용자가 입력한 아이디 값을 변수에 담는다.
      let id = document.getElementById('id_txt');
      let pw = document.getElementById('pw_txt');
      let login_btn = document.getElementById('login_btn');
      // 2. 로그인 버튼 클릭하면 id, pw값 출력하기
      login_btn.addEventListener('click', login_check);
      
      function login_check(){
        console.log(id.value, pw.value);
        if(id.value=='admin'){
          if(pw.value=='1234'){
            alert('관리자님 반갑습니다. 로그인 되었습니다.');
          }else{
            alert('패스워드가 일치하지 않습니다.');
            location.reload();
          }
        }else{
          alert('아이디가 일치하지 않습니다.');
          location.reload();
          // f5버튼 누른것과 같이 새로고침되어 사용자가 다시 입력할 수 있도록 입력박스 내용을 비워준다.(==사용성을 위해)
        }
      } 
      
    </script>
    </body>
</html>