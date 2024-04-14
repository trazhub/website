import {
    SiCplusplus,
    SiCss3,
    SiFramer,
    SiGithub, SiHtml5, SiJavascript, SiNeovim,
    SiNextdotjs,
    SiReact,
    SiRust,
    SiTailwindcss,
    SiTypescript,
    SiZig
} from "react-icons/si";
import {IconType} from "react-icons";

export type ProjectProps = {
  id: number;
  name: string;
  description: string;
  technologies: IconType[];
  techNames: string[];
  techLinks: string[];
  github: string;
  demo: string;
  image: string;
  available: boolean;
};

export const projects = [
    {
        id: 0,
        name: "Incolnx",
        description:
            "Web agency bringing offline business into online atmosphere.",
        technologies: [SiTypescript, SiReact, SiNextdotjs, SiTailwindcss, SiFramer],
        techNames: ["TypeScript", "React", "Next.js", "Tailwind CSS", "Framer Motion"],
        techLinks: ["https://www.typescriptlang.org/", "https://reactjs.org/", "https://nextjs.org/", "https://tailwindcss.com/", "https://www.framer.com/motion/"],
        github: "https://github.com/trazhub",
        demo: "https://www.incolnx.com/",
        image: "/projects/incolnx.webp",
        available: true,
    },
    // Remove the script tag from the TypeScript code block
    // <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="Trazhub" data-description="Support me on Buy me a Pizza" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>

];
