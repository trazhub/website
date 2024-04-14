import React from "react";
import Image from "next/image";

interface LogoProps {
  width?: number;
  height?: number;
}

const Logo: React.FC<LogoProps> = ({ width = 1920, height = 1080 }) => {
    return (
        <Image
            className={`w-${width} h-${height}`}
            src="/Hero.png"
            alt="Logo"
            width={width}
            height={height}
        />
    );
};

export default Logo;
