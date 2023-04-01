const circle1 = document.getElementById("circle1");
const circle2 = document.getElementById("circle2");
const circle3 = document.getElementById("circle3");
const card1 = document.getElementById("card1");
const card2 = document.getElementById("card2");
const card3 = document.getElementById("card3");
const card4 = document.getElementById("card4");
const card5 = document.getElementById("card5");
const card6 = document.getElementById("card6");

console.log(circle2)

// 1
circle1.addEventListener('mouseover', function(){
    card1.style.backgroundColor = '#FB2576';
    card1.style.transition = '0.5s all ease';
    card1.style.transform = 'scale(1.1)';
    card1.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';
    circle1.style.backgroundColor = '#FB2576';
    circle1.style.transition = '0.5s all ease';
});

circle1.addEventListener('mouseout', function(){
    card1.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card1.style.transform = 'scale(1)';
    card1.style.boxShadow = 'none';
    circle1.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card1.addEventListener('mouseover', function(){
    card1.style.backgroundColor = '#FB2576';
    card1.style.transition = '0.5s all ease';
    card1.style.transform = 'scale(1.1)';
    card1.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';
    circle1.style.backgroundColor = '#FB2576';
    circle1.style.transition = '0.5s all ease';
});

card1.addEventListener('mouseout', function(){
    card1.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card1.style.transform = 'scale(1)';
    card1.style.boxShadow = 'none';

    circle1.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

// 2
circle2.addEventListener('mouseover', function(){
    card2.style.backgroundColor = '#FB2576';
    card2.style.transition = '0.5s all ease';
    card2.style.transform = 'scale(1.1)';
    card2.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle2.style.backgroundColor = '#FB2576';
    circle2.style.transition = '0.5s all ease';
});

circle2.addEventListener('mouseout', function(){
    card2.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card2.style.transform = 'scale(1)';
    card2.style.boxShadow = 'none';

    circle2.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card2.addEventListener('mouseover', function(){
    card2.style.backgroundColor = '#FB2576';
    card2.style.transition = '0.5s all ease';
    card2.style.transform = 'scale(1.1)';
    card2.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle2.style.backgroundColor = '#FB2576';
    circle2.style.transition = '0.5s all ease';
});

card2.addEventListener('mouseout', function(){
    card2.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card2.style.transform = 'scale(1)';
    card2.style.boxShadow = 'none';

    circle2.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

// 3
circle3.addEventListener('mouseover', function(){
    card3.style.backgroundColor = '#FB2576';
    card3.style.transition = '0.5s all ease';
    card3.style.transform = 'scale(1.1)';
    card3.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    card4.style.backgroundColor = '#FB2576';
    card4.style.transition = '0.5s all ease';
    card4.style.transform = 'scale(1.1)';
    card4.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    card5.style.backgroundColor = '#FB2576';
    card5.style.transition = '0.5s all ease';
    card5.style.transform = 'scale(1.1)';
    card5.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    card6.style.backgroundColor = '#FB2576';
    card6.style.transition = '0.5s all ease';
    card6.style.transform = 'scale(1.1)';
    card6.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle3.style.backgroundColor = '#FB2576';
    circle3.style.transition = '0.5s all ease';
});

circle3.addEventListener('mouseout', function(){
    card3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card3.style.transform = 'scale(1)';
    card3.style.boxShadow = 'none';

    card4.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card4.style.transform = 'scale(1)';
    card4.style.boxShadow = 'none';

    card5.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card5.style.transform = 'scale(1)';
    card5.style.boxShadow = 'none';

    card6.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card6.style.transform = 'scale(1)';
    card6.style.boxShadow = 'none';

    circle3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card3.addEventListener('mouseover', function(){
    card3.style.backgroundColor = '#FB2576';
    card3.style.transition = '0.5s all ease';
    card3.style.transform = 'scale(1.1)';
    card3.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle3.style.backgroundColor = '#FB2576';
    circle3.style.transition = '0.5s all ease';
});

card3.addEventListener('mouseout', function(){
    card3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card3.style.transform = 'scale(1)';
    card3.style.boxShadow = 'none';

    circle3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card4.addEventListener('mouseover', function(){
    card4.style.backgroundColor = '#FB2576';
    card4.style.transition = '0.5s all ease';
    card4.style.transform = 'scale(1.1)';
    card4.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle3.style.backgroundColor = '#FB2576';
    circle3.style.transition = '0.5s all ease';
});

card4.addEventListener('mouseout', function(){
    card4.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card4.style.transform = 'scale(1)';
    card4.style.boxShadow = 'none';

    circle3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card5.addEventListener('mouseover', function(){
    card5.style.backgroundColor = '#FB2576';
    card5.style.transition = '0.5s all ease';
    card5.style.transform = 'scale(1.1)';
    card5.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle3.style.backgroundColor = '#FB2576';
    circle3.style.transition = '0.5s all ease';
});

card5.addEventListener('mouseout', function(){
    card5.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card5.style.transform = 'scale(1)';
    card5.style.boxShadow = 'none';

    circle3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});

card6.addEventListener('mouseover', function(){
    card6.style.backgroundColor = '#FB2576';
    card6.style.transition = '0.5s all ease';
    card6.style.transform = 'scale(1.1)';
    card6.style.boxShadow = '1px 1px 20px 1px rgb(255,255,255,0.5)';

    circle3.style.backgroundColor = '#FB2576';
    circle3.style.transition = '0.5s all ease';
});

card6.addEventListener('mouseout', function(){
    card6.style.backgroundColor = 'rgb(255, 255, 255, .2)';
    card6.style.transform = 'scale(1)';
    card6.style.boxShadow = 'none';

    circle3.style.backgroundColor = 'rgb(255, 255, 255, .2)';
});
