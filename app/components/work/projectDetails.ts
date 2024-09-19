import {
    SiCplusplus,
    SiCss3,
    SiElectron,
    SiFramer,
    SiGithub, SiHtml5, SiJavascript, SiMinecraft, SiNeovim,
    SiNextdotjs,
    SiNgrok,
    SiNodedotjs,
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
    
    {
        id: 1,
        name: "LocalX",
        description:
            "We Help You Host Small Minecraft Server Locally for Free And Help You Stay Protected Over the Internet.",
        technologies: [SiElectron, SiMinecraft, SiNodedotjs, SiHtml5, SiNgrok],
        techNames: ["Electron", "Minecraft", "Nodejs", "Html", "Ngrok (p2p)"],
        techLinks: ["https://www.electronjs.org/", "https://www.minecraft.net/", "https://nodejs.org/", "https://en.wikipedia.org/wiki/HTML", "https://ngrok.com/"],
        github: "https://github.com/LocalMiner/",
        demo: "https://localx.cloud/",
        image: "/projects/hmm.png",
        available: true,
    },
];
