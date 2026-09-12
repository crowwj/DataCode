const stages = [
    {
        file: "PlayerController.gd",
        badge: "Videojuegos",
        lines: [
            '<span class="cmt"># Motor de Videojuegos (Godot)</span>',
            '<span class="kw">extends</span> <span class="cls">CharacterBody3D</span>',
            '<span class="kw">@export</span> <span class="var">var</span> speed: <span class="cls">float</span> = <span class="num">7.5</span>',
            '',
            '<span class="kw">func</span> <span class="fn">_physics_process</span>(delta):',
            '    <span class="var">var</span> dir = Input.get_vector("left", "right", "up", "down")',
            '    velocity = <span class="cls">Vector3</span>(dir.x, <span class="num">0</span>, dir.y) * speed',
            '    move_and_slide()'
        ]
    },
    {
        file: "index.html & style.css",
        badge: "Página Web",
        lines: [
            '<span class="cmt">&lt;!-- Plataforma DataCode 2.0 --&gt;</span>',
            '<span class="kw">&lt;div</span> <span class="var">class</span>=<span class="str">"datacode-card"</span><span class="kw">&gt;</span>',
            '    <span class="kw">&lt;h1&gt;</span>Ingeniería de Software<span class="kw">&lt;/h1&gt;</span>',
            '    <span class="kw">&lt;p&gt;</span>Innovación y Código Universitario<span class="kw">&lt;/p&gt;</span>',
            '<span class="kw">&lt;/div&gt;</span>',
            '',
            '<span class="cmt">/* Estilos corporativos */</span>',
            '<span class="cls">.datacode-card</span> { <span class="var">background</span>: <span class="str">#5a1827</span>; }'
        ]
    },
    {
        file: "MainActivity.kt",
        badge: "Celular & Software",
        lines: [
            '<span class="cmt">// App Móvil (Kotlin) / Software (C#)</span>',
            '<span class="kw">class</span> <span class="cls">MainActivity</span> : <span class="cls">ComponentActivity</span>() {',
            '    <span class="kw">override fun</span> <span class="fn">onCreate</span>(savedInstanceState: <span class="cls">Bundle</span>?) {',
            '        <span class="kw">super</span>.onCreate(savedInstanceState)',
            '        <span class="fn">setContent</span> {',
            '            <span class="cls">DataCodeTheme</span> { <span class="cls">MainScreen</span>() }',
            '        }',
            '    }',
            '}'
        ]
    }
];

let currentStage = 0;
let lineIndex = 0;
let charIndex = 0;

const fileNameEl = document.getElementById('file-name');
const langBadgeEl = document.getElementById('lang-badge');
const editorBodyEl = document.getElementById('editor-body');

function typeEffect() {
    const stage = stages[currentStage];
    if (!fileNameEl || !langBadgeEl || !editorBodyEl) return;

    fileNameEl.textContent = stage.file;
    langBadgeEl.textContent = stage.badge;

    if (lineIndex === 0 && charIndex === 0) {
        editorBodyEl.innerHTML = '';
    }

    if (lineIndex < stage.lines.length) {
        let currentLineHTML = stage.lines[lineIndex];
        
        let lineDiv = document.getElementById(`line-${lineIndex}`);
        if (!lineDiv) {
            lineDiv = document.createElement('div');
            lineDiv.id = `line-${lineIndex}`;
            lineDiv.className = 'code-line';
            editorBodyEl.appendChild(lineDiv);
        }

        lineDiv.innerHTML = currentLineHTML.substring(0, charIndex) + '<span class="typing-cursor"></span>';

        charIndex++;

        if (charIndex > currentLineHTML.length) {
            lineDiv.innerHTML = currentLineHTML;
            lineIndex++;
            charIndex = 0;
            setTimeout(typeEffect, 250); 
        } else {
            setTimeout(typeEffect, 20); 
        }
    } else {
        setTimeout(() => {
            lineIndex = 0;
            charIndex = 0;
            editorBodyEl.innerHTML = ''; 
            currentStage = (currentStage + 1) % stages.length; 
            typeEffect();
        }, 2500);
    }
}

document.addEventListener("DOMContentLoaded", typeEffect);