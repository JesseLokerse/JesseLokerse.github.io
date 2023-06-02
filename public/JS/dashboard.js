const hboict = [
  {
    quartile: 1,
    course: [
      {
        name: 'PCO: Program % Career Orientation',
        weight: 2.5,
        exam: [
          { name: 'Assessment website', weight: 1, lowestPassingGrade: 5.5, grade: 7.3 }
        ]
      },
      {
        name: 'CBA: Computer Science Basics',
        weight: 5,
        exam: [
          { name: 'Written knowledge test', weight: 1, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      },
      {
        name: 'PBA: Programming Basics',
        weight: 5,
        exam: [
          { name: 'Case study', weight: 1, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      },
      {
        name: 'PPW1: ITR Personality Project Week 1',
        weight: 1.25,
        exam: [
          { name: 'Portfolio', weight: 1, lowestPassingGrade: 5.5 }
        ]
      },
    ],
  },
  {
    quartile: 2,
    course: [
      {
        name: 'Object Oriented Programing',
        weight: 10,
        exam: [
          { name: 'Case study', weight: 0.5, lowestPassingGrade: 5.5, grade: 0.0 },
          { name: 'Project', weight: 0.5, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      },
    ],
  },
  {
    quartile: 3,
    course: [
      {
        name: 'Framework Development 1',
        weight: 5,
        exam: [
          { name: 'Case study', weight: 1, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      },
      {
        name: 'Framework Project 1',
        weight: 7.5,
        exam: [
          { name: 'Project', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0 },
          { name: 'Case study exam', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0 },
          { name: 'Report', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      },
    ],
  },
  {
    quartile: 4,
    course: [
      {
        name: 'Framework Project 2',
        weight: 10,
        exam: [
          { name: 'Portfolio', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0},
          { name: 'Project', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0 },
          { name: 'Assessment', weight: 1 / 3, lowestPassingGrade: 5.5, grade: 0.0 }
        ]
      }
    ]
  }
];
let totalEC = 0;
for (let i = 0; i < hboict.length; i++) {
  for (let aNumber = 0; aNumber < hboict[i].course.length; aNumber++) {
    for (let bNumber = 0; bNumber < hboict[i].course[aNumber].exam.length; bNumber++) {
      if (hboict[i].course[aNumber].exam[bNumber].grade > hboict[i].course[aNumber].exam[bNumber].lowestPassingGrade) {
        totalEC = totalEC + hboict[i].course[aNumber].weight * hboict[i].course[aNumber].exam[bNumber].weight;
      }
    }
  }
}

console.log(totalEC);
const progressie = document.createElement('strong');
const progressieLocatie = document.querySelector('#container');
progressieLocatie.appendChild(progressie);

progressie.innerHTML = 'Progressie:';

const enter = document.createElement('br');
const enterLocation = document.querySelector('#container');
enterLocation.appendChild(enter);

const progressbar = document.createElement('img');
const progressbarLocation = document.querySelector('#container');
progressbarLocation.appendChild(progressbar);
progressbar.src = 'https://media.s-bol.com/mBjEoO1XZ69/798x1200.jpg';
progressbar.width = totalEC / 60 * 500;
progressbar.classList.add('progressbar');