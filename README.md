# 230205

### 1. button 에 리디렉션 액션 만들기

onclick 이벤트를 추가해 리디렉션 링크로 이동시킨다.

```html
<button type="button" onclick="location.href=''"></button>
```

### 2.media query 이용하기

```css
@media (max-width: 1083px) {
  /*  */
}
```

### 3. CSS 변수 사용하기

```css
:root {
  --black: #333333;
}

element {
  color: var(--black);
}
```

### 4. 반응형 웹 페이지 기본 세팅

아래의 코드를 header 에 삽입한다.

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
```

### 5. Grid 사용하기

#### 1. 기본

```css
element {
  display: grid;
  grid-template-columns: 10px repeat(2, 1fr) 30%;
}
```

#### 2. minmax

```css
element {
  display: grid;
  grid-template-columns: 10px minmax(30px, 80px) 30%;
}
```

#### 3. repeat & minmax

```css
element {
  display: grid;
  grid-template-columns: repeat(3, minmax(auto-fit, 1fr));
}
```

#### 4. grid-template-areas

```css
element {
  display: grid;
  grid-template-areas:
    "a a a"
    "b b c"
    ". d d";
}
```

### 6. order

flex 또는 grid 사용 시 html 의 구조를 변경하지 않고 element 의 순서를 바꿔준다. media query 시 사용하면 유용한 듯

```css
mother-element {
  display: grid;
}

child-element:nth-child(3) {
  order: 6;
}
```

### 7. 텍스트가 넘치지 않게 줄이기

element 가 block 타입이어야 한다.

```css
.element {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  word-break: break-all;
}
```

### 8. JS 로 스크린 사이즈 체크하기

스크린 사이즈가 1083px 이상일 시

```js
if (window.screen.width >= 1083) {
  
}
```

# 230220
### 1. PHP 파일 include 하기
```php
  <?php
    include("filename.php");
  ?>
```